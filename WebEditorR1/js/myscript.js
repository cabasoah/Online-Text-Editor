$(function () {

    let edhtml = ace.edit('html');
    edhtml.setTheme('ace/theme/vibrant_ink');
    edhtml.session.setMode('ace/mode/html');
    edhtml.setValue(htmlTemp());
    //edhtml.session.insert(htmlTemp());

    let edcss = ace.edit('css');
    edcss.setTheme('ace/theme/cobalt');
    edcss.session.setMode('ace/mode/css');
    edcss.setValue(cssTemp());

    let edjs = ace.edit('js');
    edjs.setTheme('ace/theme/tomorrow_night_blue');
    edjs.session.setMode('ace/mode/js');
    edjs.setValue(jsTemp());


    // Initial Templete for html
    function htmlTemp() {
        text = '<!DOCTYPE html>\n\
<html> \n\
<head>\n\
<title></title>\n\
</head>\n\
<body>\n\
\n\
</body>\n\
</html>\n\
';
        return text;
    }

    // Initial Templete for javascript
    function jsTemp() {
        text = '// Start Writing Javascript Here \n\
';
        return text;
    }

    // Initial Templete for css
    function cssTemp() {
        text = '/* Start Styling Your Page Here*/ \n\
';
        return text;
    }




    // fetching html elements
    function pickHtml() {
        let htmltext = edhtml.session.getValue();
        return htmltext;
    }

    // fetching css elements
    function pickCss() {
        let csstext = edcss.session.getValue();
        return csstext;
    }

    // fetching js elements
    function pickJs() {
        let jstext = edjs.session.getValue();
        return jstext;
    }

    //Event handler for keyup
    $('#edContainer').on('keyup', function () {
        //	var htmltext = edhtml.session.getValue();

        //htmltext = JSON.stringify(htmltext);
        //$.post('php/action.php', { textcontent: htmltext }, function(data) {
        //console.log(data);
        //	$('#livePreview').attr('src', 'php/preview-content.html');
        //});


        let target = $("#livePreview")[0].contentWindow.document;
        target.open();
        target.close();

        let html = pickHtml();
        let css = pickCss();
        let js = pickJs();

        $("body", target).append(html);
        $("head", target).append("<style>" + css + "</style>");
        $("body", target).append("<script>" + js + "</script>");

    });
});