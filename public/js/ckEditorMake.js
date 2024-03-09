// Lấy mã token từ meta tag có tên "csrf-token"
let token = $('meta[name="csrf-token"]').attr('content');

// Hàm để cấu hình CKEditor cho một editor cụ thể
function configureCKEditor(editorId, token) {
    ClassicEditor
        .create(document.querySelector(editorId), {
            ckfinder: {
                uploadUrl: "/admin/upload?_token=" + token
            }
        })
        .then(editor => {
            // Set the height of the editor
            editor.editing.view.change(writer => {
                writer.setStyle(
                    'height',
                    '200px',
                    editor.editing.view.document.getRoot()
                );
            });
        })
        .catch(error => {
            console.error(error);
        });
}

// Cấu hình CKEditor cho #editor
configureCKEditor('#editor', token);

// Cấu hình CKEditor cho #editor2
configureCKEditor('#editor2', token);
