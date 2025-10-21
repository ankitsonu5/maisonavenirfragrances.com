<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Blog Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.20.3/css/grapes.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.20.3/grapes.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Blog Page</h1>
        <a href="{{ route('blog_pages.index') }}" class="btn btn-secondary mb-3">Back to Blog Pages</a>
        <div id="gjs"></div>
        <button id="save-button" class="btn btn-success mt-3">Save Changes</button>
    </div>

    <script>
        // Initialize GrapesJS
        const editor = grapesjs.init({
            container: '#gjs',
            height: '100vh',
            fromElement: false,
            storageManager: false,
            panels: { defaults: [] },
            blockManager: {
                appendTo: '#blocks',
                blocks: [
                    {
                        id: 'text',
                        label: 'Text',
                        content: '<div>Insert your text here</div>',
                    },
                    {
                        id: 'image',
                        label: 'Image',
                        content: '<img src="https://via.placeholder.com/150" />',
                    },
                ],
            },
        });

        // Load existing content
        const existingContent = `{!! addslashes($blogPage->content) !!}`;
        editor.setComponents(existingContent);

        // Save Button Handler
        document.getElementById('save-button').addEventListener('click', () => {
            const content = editor.getHtml(); // Get HTML content
            fetch('{{ route("blog_pages.update", $blogPage->id) }}', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ title: '{{ $blogPage->title }}', content }),
            }).then(response => response.json()).then(data => {
                alert('Page updated successfully!');
                window.location.href = '{{ route("blog_pages.index") }}';
            });
        });
    </script>
</body>
</html>
