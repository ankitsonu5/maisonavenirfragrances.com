<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Builder with Template</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.22.2/css/grapes.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.22.2/grapes.min.js"></script>
    <style>
        body, html {
            margin: 0;
            height: 100%;
            overflow: hidden;
        }
        #gjs {
            background-color: #f8f9fa;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="gjs"></div>
    <script>
        const editor = grapesjs.init({
            container: '#gjs',
            height: '100%',
            fromElement: false,
            storageManager: false,
            panels: { defaults: [] },
            blockManager: {
                appendTo: '#gjs',
                blocks: [
                    // Header Block
                    {
                        id: 'header',
                        label: 'Header',
                        content: `
                            <header style="padding: 20px; background: #007bff; color: white; text-align: center;">
                                <h1>Header Section</h1>
                            </header>
                        `,
                        category: 'Sections',
                    },
                    // Hero Section Block
                    {
                        id: 'hero',
                        label: 'Hero Section',
                        content: `
                            <section style="padding: 50px; text-align: center; background: #6c757d; color: white;">
                                <h2>Build your templates without coding</h2>
                                <p>All text blocks could be edited easily with double-clicking on it.</p>
                                <button style="padding: 10px 20px; background: #007bff; color: white; border: none; border-radius: 5px;">Hover me</button>
                            </section>
                        `,
                        category: 'Sections',
                    },
                    // Three Columns Block
                    {
                        id: 'columns',
                        label: '3 Columns',
                        content: `
                            <section style="display: flex; padding: 20px; gap: 10px;">
                                <div style="flex: 1; padding: 20px; background: #e9ecef;">Column 1</div>
                                <div style="flex: 1; padding: 20px; background: #e9ecef;">Column 2</div>
                                <div style="flex: 1; padding: 20px; background: #e9ecef;">Column 3</div>
                            </section>
                        `,
                        category: 'Layout',
                    },
                    // Footer Block
                    {
                        id: 'footer',
                        label: 'Footer',
                        content: `
                            <footer style="padding: 20px; background: #343a40; color: white; text-align: center;">
                                <p>Footer Section</p>
                            </footer>
                        `,
                        category: 'Sections',
                    },
                ],
            },
            layerManager: {
                appendTo: '.layers-container',
            },
            deviceManager: {
                devices: [
                    { name: 'Desktop', width: '' },
                    { name: 'Tablet', width: '768px' },
                    { name: 'Mobile', width: '375px' },
                ],
            },
            panels: {
                defaults: [
                    {
                        id: 'layers',
                        el: '.panel__right',
                        resizable: {
                            tc: 0, // Top handler
                            cl: 1, // Left handler
                            cr: 0, // Right handler
                            bc: 0, // Bottom handler
                        },
                    },
                    {
                        id: 'panel-switcher',
                        el: '.panel__switcher',
                        buttons: [
                            {
                                id: 'show-layers',
                                active: true,
                                label: 'Layers',
                                command: 'show-layers',
                                togglable: false,
                            },
                            {
                                id: 'show-style',
                                active: false,
                                label: 'Styles',
                                command: 'show-styles',
                                togglable: false,
                            },
                            {
                                id: 'show-traits',
                                active: false,
                                label: 'Traits',
                                command: 'show-traits',
                                togglable: false,
                            },
                        ],
                    },
                ],
            },
            selectorManager: {
                appendTo: '.styles-container',
            },
            styleManager: {
                appendTo: '.styles-container',
                sectors: [
                    {
                        name: 'General',
                        open: true,
                        buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom'],
                    },
                    {
                        name: 'Dimension',
                        open: false,
                        buildProps: ['width', 'height', 'max-width', 'min-height', 'margin', 'padding'],
                    },
                    {
                        name: 'Typography',
                        open: false,
                        buildProps: ['font-family', 'font-size', 'font-weight', 'color', 'line-height'],
                    },
                    {
                        name: 'Decorations',
                        open: false,
                        buildProps: ['background-color', 'border-radius', 'border', 'box-shadow'],
                    },
                ],
            },
        });

        editor.Panels.addPanel({
            id: 'basic-actions',
            el: '.panel__basic-actions',
            buttons: [
                {
                    id: 'save',
                    className: 'btn-save',
                    label: 'Save',
                    command: 'save-data',
                },
            ],
        });
    </script>
</body>
</html>
