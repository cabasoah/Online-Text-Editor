<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Online Web Editor </title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="./css/editorStyle.css">
        
    </head>
    <body>
        <div id="" class="container">

            <!--Header-->
            <div id="" class="row">
                <div id="" class="col">
                    <div id=" header" class="card card-header text-center bg-info text-white mt-2">     
                   ONLINE WEB TEXT EDITOR
                    </div>
                </div>
            </div>

            <!--source code window-->

            <div id=" source" class="row mt-4">
                
                <div id="" class="col-sm-6"> 
                    <div id="" class="card text-center ">
                        <div id="" class=" card-header">
                             <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a href="#html" id="nav-html-tab" class="nav-link" role="tab" aria-control="nav-html" aria-selected="true" data-toggle="tab">Html</a>
                            </li>
                            <li>
                                 <a href="#css" id="nav-css-tab" class="nav-link" role="tab" aria-control="nav-css" aria-selected="false" data-toggle="tab">CSS</a>
                            </li>
                            <li>
                                 <a href="#js" id="nav-js-tab" class="nav-link" role="tab" aria-control="nav-js" aria-selected="false" data-toggle="tab">JS</a>
                            </li>
                            <!--<span id="preview" class="btn btn-success">Run</span>-->

                        </ul>

                        </div>

                        <!--editor-->

                    <div id="edContainer" class="card-body tab-content">
                        <div aria-labelledby="nav-html-tab" role="tabpanel" id="html" class="tab-pane active">
                      
                            </div>
                            <div aria-labelledby="nav-css-tab" role="tabpanel" id="css" class="tab-pane">
                              
                            </div>
                            <div aria-labelledby="nav-js-tab" role="tabpanel" id="js" class="tab-pane">
                               
                            </div>
                        </div>
                        
                    </div>
                </div>

             <!--preview window-->
            <div id="innerPreview" class="col-sm-6"> 
                  <iframe id="livePreview" src="">
        
                  </iframe>
              </div>
        </div>
            
            <footer>
            <div class="row">
            <div class="col text-center  text-black" id="footer">
            CodeSmith Project One @2019
            </div>
            </div>
            </footer>

    </div>


<!-- INTERNAL JAVASCRIPT LINKS-->

<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="src-min-noconflict/ace.js" type="text/javascript"></script>
<script src="bootstrap.min.js" type="text/javascript"></script>
<script src="./js/myscript.js"></script>

<script>
</script>

</body>
</html>
