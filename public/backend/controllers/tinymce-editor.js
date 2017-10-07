function tinymce_editor(ClassName){
tinymce.init({
    selector: ClassName,
    resize : false,
    menubar : false,
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern imagetools jbimages"
    ],
    toolbar1: "undo redo | underline strikethrough styleselect bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | fontsizeselect | link image | print preview media forecolor backcolor emoticons jbimages | table",
    image_advtab: true,
    relative_urls: false,
    remove_script_host: false,
    body_class: "my_class",
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});    
}
