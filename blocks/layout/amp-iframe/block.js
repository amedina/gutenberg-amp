/**
 * BLOCK: amp-iframe
 *
 * Registering an amp-iframe block with Gutenberg.
 * Displays an iframe.
 *
 * Styles:
 *        editor.css — Editor styles for the block.
 *        style.css  — Editor & Front end styles for the block.
 */
( function() {
    var __ = wp.i18n.__; // The __() for internationalization.
    var el = wp.element.createElement; // The wp.element.createElement() function to create elements.
    var registerBlockType = wp.blocks.registerBlockType; // The registerBlockType() to register blocks.

    /**
     * Register Basic Block.
     *
     * Registers a new block provided a unique name and an object defining its
     * behavior. Once registered, the block is made available as an option to any
     * editor interface where blocks are implemented.
     *
     * @param  {string}   name     Block name.
     * @param  {Object}   settings Block settings.
     * @return {?WPBlock}          The block, if it has been successfully
     *                             registered; otherwise `undefined`.
     */
    registerBlockType( 'gb-amp-iframe', { // Block name. Block names must be string that contains a namespace prefix. Example: my-plugin/my-custom-block.
        title: __( 'Basic', 'gb-amp' ), // Block title.
        icon: 'dashicons-align-center', // Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
        category: 'amp', // Block category — Group blocks together based on common traits E.g. common, formatting, layout widgets, embed.

        edit: function( props ) {
            // Creates a <p class='wp-block-gb-01-basic'></p>.
            return el(
                'amp-iframe', // Tag type.
                // The class="wp-block-gb-01-basic" : The class name is generated using the block's
                // name prefixed with wp-block-, replacing the / namespace separator with a single -.
                {
                    className: props.className,
                    width: "500",
                    layout: "responsive",
                    sandbox: "allow-scripts allow-same-origin allow-popups",
                    allowfullscreen: "",
                    frameborder: "0",
                    src: "https://player.vimeo.com/video/140261016"
                },
                '' // Content inside the tag.
            );
        },

        save: function( props ) {
            return el(
                'amp-iframe',
                {
                    className: props.className,
                    width: "500",
                    layout: "responsive",
                    sandbox: "allow-scripts allow-same-origin allow-popups",
                    allowfullscreen: "",
                    frameborder: "0",
                    src: "https://player.vimeo.com/video/140261016"
                },
                '' // Content inside the tag.
            );
        },
    } );
})();