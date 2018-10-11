<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>

            $(document).ready(function(){
                $("#action").click(function(event){
                    $.ajax ({
                        url : "info.txt",
                        dataType : "text",
                        success : function(data){
                            $("#resultat").html(data);
                        }
                    });

                });
            });
        
        </script>
    </head>
    <body>
        <button id="action">Charger le fichier</button>
        <div id="resultat"></div>        
    </body>
</html>