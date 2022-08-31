
/**
 Plugin Name: WebSapient Plugin Boilerplate
 Description: An opinionated WordPress plugin boilerplate that's modular and easy to understand.
 Author: Brian Francoeur
 Version: 0.1
 Text Domain: ws-plugin-boilerplate
*/
<?php

namespace NamespaceName;

// add namespaced modules and classes here
// use FolderName\SubFolderName\FileName

if ( ! ClassName ) {
    class ClassName {

        public function __construct() {
            // add core methods and method calls here
        }

        public function register() {
            // register methods here
        }

        public function settings($links) {
            // add code to define plugin display settings in wp-admin
        }

        public function activate() {
            flush_rewrite_rules();
        }

        public function deactivate() {
            flush_rewrite_rules();
        }

        public function uninstall() {
            // call core class file for uninstallation
        }
        
    }

    // assign ClassName to a variable
    $className = new ClassName();


}