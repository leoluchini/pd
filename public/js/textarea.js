$(function(){
	tinymce.init({
  selector: 'textarea.tinymce',
  language: 'es_AR',
  height: 200,
  plugins: [
    'advlist autolink lists link charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime table contextmenu paste code'
  ],
  menubar: false,
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link',
});
})