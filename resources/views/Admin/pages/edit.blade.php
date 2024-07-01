<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="https://unpkg.com/grapesjs-plugin-forms"></script>
    <script src="https://unpkg.com/grapesjs-blocks-basic"></script>
    <script src="https://unpkg.com/grapesjs-preset-newsletter"></script>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        #gjs {
            border: 3px solid #444;
        }
        .form-container {
            padding: 20px;
        }
        .editor-container {
            height: calc(100% - 250px);
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid form-container">
        <form action="{{ route('pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" name="nama" value="{{ $page->nama }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                    <img src="{{ asset('storage/' . $page->image) }}" alt="Current Image" class="img-fluid mt-2" width="150">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" name="role" value="{{ $page->Role }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" name="instagram" value="{{ $page->instagram }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update Page</button>
            <textarea id="content" name="content" style="display:none">{{ $page->content }}</textarea>
            <textarea id="styles" name="styles" style="display:none">{{ $page->styles }}</textarea>
            <div id="gjs" class="editor-container"></div>
        </form>
    </div>

    <script type="text/javascript">
        var editor = grapesjs.init({
            container: '#gjs',
            fromElement: true,
            height: '100%',
            width: 'auto',
            storageManager: { type: null },
            plugins: [
                'gjs-blocks-basic',
                'grapesjs-plugin-forms',
                'grapesjs-preset-newsletter'
            ],
            pluginsOpts: {
                'gjs-blocks-basic': {},
                'grapesjs-plugin-forms': {},
                'grapesjs-preset-newsletter': {}
            }
        });

        document.querySelector('form').addEventListener('submit', function() {
            var content = editor.getHtml();
            var styles = editor.getCss(); 
            document.getElementById('content').value = content;
            document.getElementById('styles').value = styles;
        });
    </script>
</body>
</html>
