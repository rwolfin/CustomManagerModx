<?php
if ($modx->event->name == 'OnManagerPageInit') {
    $css = '
    <style>
        /* Применяем градиент к фону панели меню */
        #modx-header {
            background: linear-gradient(to bottom,
                    #3f4850 0%,
                    #365462 46%,
                    #3e5554 60%,
                    #42554d 68%,
                    #573d4e 100%) !important;
            border: none !important;
        }

        .x-window.x-window-plain .x-toolbar-left-row .x-toolbar-cell:nth-child(1) .x-btn,
        .x-window.x-window-plain .x-toolbar-left-row .x-toolbar-cell:nth-child(2) .x-btn,
        .actions button.primary-button,
        .primary-button.inline-button,
        .primary-button.x-superboxselect-item,
        .primary-button.x-form-trigger,
        .primary-button.x-date-mp-ok,
        .primary-button.x-date-mp-cancel,
        .primary-button.x-btn {
            background-color: #32AB9A;
            background-image: linear-gradient(#32AB9A, #00948E);
        }

        .x-window.x-window-plain .x-toolbar-left-row .x-toolbar-cell:nth-child(1) .x-btn-over.x-btn,
        .x-window.x-window-plain .x-toolbar-left-row .x-toolbar-cell:nth-child(2) .x-btn-over.x-btn,
        .actions button.x-btn-over.primary-button,
        .x-btn-over.primary-button.inline-button,
        .x-btn-over.primary-button.x-superboxselect-item,
        .x-btn-over.primary-button.x-form-trigger,
        .x-btn-over.primary-button.x-date-mp-ok,
        .x-btn-over.primary-button.x-date-mp-cancel,
        .x-btn-over.primary-button.x-btn,
        .x-window.x-window-plain .x-toolbar-left-row .x-toolbar-cell:nth-child(1) .x-btn:hover,
        .x-window.x-window-plain .x-toolbar-left-row .x-toolbar-cell:nth-child(2) .x-btn:hover,
        .actions button.primary-button:hover,
        .primary-button.inline-button:hover,
        .primary-button.x-superboxselect-item:hover,
        .primary-button.x-form-trigger:hover,
        .primary-button.x-date-mp-ok:hover,
        .primary-button.x-date-mp-cancel:hover,
        .primary-button.x-btn:hover {
            background-color: #2b9385;
            background-image: linear-gradient(#2b9385, #007571);
            box-shadow: none;
            color: #FFF;
        }

        body a {
            color: #6691a8;
        }

        body a:hover {
            color: #54798d;
        }

        #modx-chunk-tabs .x-form-check-wrap [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-chunk-tabs .x-form-check-wrap [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-chunk-tabs .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-chunk-tabs .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-chunk-tabs .x-fieldset legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-chunk-tabs .x-fieldset legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-plugin-tabs .x-form-check-wrap [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-plugin-tabs .x-form-check-wrap [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-plugin-tabs .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-plugin-tabs .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-plugin-tabs .x-fieldset legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-plugin-tabs .x-fieldset legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-resource-tabs .display-switch .x-form-check-wrap [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-resource-tabs .display-switch .x-form-check-wrap [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-resource-tabs .display-switch .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-resource-tabs .display-switch .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-resource-tabs .display-switch .x-fieldset legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-resource-tabs .display-switch .x-fieldset legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-snippet-tabs .x-form-check-wrap [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-snippet-tabs .x-form-check-wrap [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-snippet-tabs .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-snippet-tabs .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-snippet-tabs .x-fieldset legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-snippet-tabs .x-fieldset legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-template-tabs .x-form-check-wrap [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-template-tabs .x-form-check-wrap [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-template-tabs .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-template-tabs .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-template-tabs .x-fieldset legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-template-tabs .x-fieldset legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-tv-tabs .display-switch .x-form-check-wrap [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-tv-tabs .display-switch .x-form-check-wrap [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-tv-tabs .display-switch .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-tv-tabs .display-switch .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-tv-tabs .display-switch .x-fieldset legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-tv-tabs .display-switch .x-fieldset legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-tv-editor-tabs .x-form-check-wrap [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-tv-editor-tabs .x-form-check-wrap [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-tv-editor-tabs .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-tv-editor-tabs .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        #modx-tv-editor-tabs .x-fieldset legend [type=checkbox]:checked+.x-form-cb-label:before,
        #modx-tv-editor-tabs .x-fieldset legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        .display-switch .x-form-check-wrap [type=checkbox]:checked+.x-form-cb-label:before,
        .display-switch .x-form-check-wrap [type=checkbox]:checked+.x-fieldset-header-text:before,
        .display-switch .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-form-cb-label:before,
        .display-switch .x-fieldset-checkbox-toggle legend [type=checkbox]:checked+.x-fieldset-header-text:before,
        .display-switch .x-fieldset legend [type=checkbox]:checked+.x-form-cb-label:before,
        .display-switch .x-fieldset legend [type=checkbox]:checked+.x-fieldset-header-text:before {
            background-color: #31aa9a;
            border-color: #3697cd;
        }

        .updates-widget .updates-ok {
            background-color: #3697cd;
            box-shadow: 0 0 0 1px #3697cd;
        }

        .dashboard-buttons .dashboard-button-icon .icon {

            color: #6691a8;

        }

        .dashboard-buttons .dashboard-button-icon {
            border: 1px solid #6691a8;
            background: rgb(102 145 168 / 25%);
        }



        .x-tree-node a,
        .x-dd-drag-ghost a {
            color: #6691a8;
        }

        .tree-pseudoroot-node.x-tree-node-el.x-tree-node-expanded,
        .tree-pseudoroot-node.x-tree-node-el.x-tree-node-expanded span,
        .tree-pseudoroot-node.x-tree-node-el.x-tree-node-expanded>.icon {
            color: #6691a8;
        }

        .x-tree-node-el {
            color: #7789a0;

        }

        .modx-tree-node-tool-ct .x-btn:hover, .modx-tree-node-tool-ct .x-btn:focus {
        color: #6691a8 !important;
        }

     </style>
    ';
    $modx->regClientCSS($css);
}