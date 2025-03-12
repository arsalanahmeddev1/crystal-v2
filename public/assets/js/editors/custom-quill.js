// quill editor

document.addEventListener('DOMContentLoaded', function () {
  // Initialize Quill editor for Content
  var quill = new Quill('#editor8', {
    theme: 'snow',
    modules: {
      toolbar: [
        [{ 'size': ['small', false, 'large', 'huge'] }], // Font size dropdown
        ['bold', 'italic', 'underline', 'strike'],       // Text formatting
        [{ 'script': 'sub' }, { 'script': 'super' }],    // Subscript/Superscript
        [{ 'header': 1 }, { 'header': 2 }],              // Headers
        [{ 'list': 'ordered' }, { 'list': 'bullet' }],   // Lists
        [{ 'indent': '-1' }, { 'indent': '+1' }],        // Indent
        ['link', 'image', 'video'],                      // Link, Image, Video
        [{ 'color': [] }, { 'background': [] }],         // Text color and background
        ['blockquote', 'code-block'],                    // Blockquote and Code block
        [{ 'align': [] }],                               // Text alignment
        ['clean']                                        // Remove formatting
      ]
    },
    placeholder: 'Enter your message...'
  });

  // Sync editor content with the hidden textarea
  var editorContent = document.getElementById('editor-content8');
  quill.on('text-change', function () {
    editorContent.value = quill.root.innerHTML;
  });

  // Optional: Set initial content (e.g., for editing)
  if (editorContent.value) {
    quill.root.innerHTML = editorContent.value;
  }
});