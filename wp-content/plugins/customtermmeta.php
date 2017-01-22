<?php
/*
Plugin Name: Kama Taxonomy Metadata
Description: Infrastructure plugin which implements metadata functionality for taxonomy terms, including for tags and categories.
Version: 0.2
Author: Kama, mitcho (Michael Yoshitaka Erlewine), sirzooro
Author URI: http://mitcho.com/
*/

/**
 *
 * Используйте в WordPress функции
 * add_term_meta() delete_term_meta() get_term_meta() update_term_meta()
 */

// установим таблицу в $wpdb
global $wpdb;
$wpdb->termmeta = "{$wpdb->prefix}termmeta";

## Функция создания таблицы метаданных таксономий, вешается на register_activation_hook()

# register_activation_hook( __FILE__, 'create_termmeta_table');
function create_termmeta_table(){
    global $wpdb;

    $charset_collate = '';
    if ( ! empty($wpdb->charset) )
        $charset_collate = "DEFAULT CHARACTER SET $wpdb->charset";
    if ( ! empty($wpdb->collate) )
        $charset_collate .= " COLLATE $wpdb->collate";

    /*
     * Indexes have a maximum size of 767 bytes. Historically, we haven't need to be concerned about that.
     * As of 4.2, however, we moved to utf8mb4, which uses 4 bytes per character. This means that an index which
     * used to have room for floor(767/3) = 255 characters, now only has room for floor(767/4) = 191 characters.
     */
    $max_index_length = 191;

    $tables = $wpdb->get_results("show tables like '{$wpdb->prefix}termmeta'");
    if (!count($tables)){
        $wpdb->query("CREATE TABLE {$wpdb->prefix}termmeta (
			meta_id bigint(20) unsigned NOT NULL auto_increment,
			term_id bigint(20) unsigned NOT NULL default '0',
			meta_key varchar(255) default NULL,
			meta_value longtext,
			PRIMARY KEY (meta_id),
			KEY term_id (term_id),
			KEY meta_key (meta_key($max_index_length))
		) $charset_collate;");
    }
}

## ничего не делаем уже установлен или есть его аналог
if( ! function_exists('add_term_meta') ){
    ## Удаляет все метаполя термина при удалении термина
    // do_action('delete_term', $term, $tt_id, $taxonomy, $deleted_term );
    add_action('delete_term', 'delete_termmeta_on_delete_term' );
    function delete_termmeta_on_delete_term( $term_id ){
        global $wpdb;
        $wpdb->delete( $wpdb->termmeta, array('term_id' => $term_id ), array('%d') );
    }

    //
    // Taxonomy meta functions
    //

    /**
     * Add meta data field to a term.
     *
     * @param int $term_id Post ID.
     * @param string $key Metadata name.
     * @param mixed $value Metadata value.
     * @param bool $unique Optional, default is false. Whether the same key should not be added.
     * @return bool False for failure. True for success.
     */
    function add_term_meta( $term_id, $meta_key, $meta_value, $unique = false ) {
        return add_metadata('term', $term_id, $meta_key, $meta_value, $unique );
    }

    /**
     * Remove metadata matching criteria from a term.
     *
     * You can match based on the key, or key and value. Removing based on key and
     * value, will keep from removing duplicate metadata with the same key. It also
     * allows removing all metadata matching key, if needed.
     *
     * @param int $term_id term ID
     * @param string $meta_key Metadata name.
     * @param mixed $meta_value Optional. Metadata value.
     * @return bool False for failure. True for success.
     */
    function delete_term_meta( $term_id, $meta_key, $meta_value = '' ) {
        return delete_metadata('term', $term_id, $meta_key, $meta_value );
    }

    /**
     * Retrieve term meta field for a term.
     *
     * @param int $term_id Term ID.
     * @param string $key The meta key to retrieve.
     * @param bool $single Whether to return a single value.
     * @return mixed Will be an array if $single is false. Will be value of meta data field if $single
     *  is true.
     */
    function get_term_meta( $term_id, $meta_key = '', $single = false ) {
        return get_metadata('term', $term_id, $meta_key, $single );
    }

    /**
     * Update term meta field based on term ID.
     *
     * Use the $prev_value parameter to differentiate between meta fields with the
     * same key and term ID.
     *
     * If the meta field for the term does not exist, it will be added.
     *
     * @param int $term_id Term ID.
     * @param string $key Metadata key.
     * @param mixed $value Metadata value.
     * @param mixed $prev_value Optional. Previous value to check before removing.
     * @return bool False on failure, true if success.
     */
    function update_term_meta( $term_id, $meta_key, $meta_value, $prev_value = '' ){
        return update_metadata('term', $term_id, $meta_key, $meta_value, $prev_value );
    }
}