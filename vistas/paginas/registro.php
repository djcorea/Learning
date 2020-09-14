<div class="d-flex justify-content-center text-center" >

        <form class="p-5 bg-light" method="post">

            <div class="form-group">
                <label for="nombre">Name:</label>
                <div class="form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                        <input name="rNombre" type="text" class="form-control" placeholder="Enter nombre" id="email">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label for="email">Email address:</label>

                <div class="form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                        <input name="rEmail" type="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>

                <div class="form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input name="rPwd" type="password" class="form-control" placeholder="Enter password" id="pwd">
                    </div>
                </div>
            </div>

            <?php   

            /* -------------------------------------------------------------------------- */
            /*         FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO NO ESTATICO        */
            /* -------------------------------------------------------------------------- */

                        //   $registro =  new controladorFormularios();
                        // $registro->ctrRegistro();
            /* -------------------------------------------------------------------------- */
            /*         FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO ESTATICO        */
            /* -------------------------------------------------------------------------- */

                $registro=controladorFormularios::ctrRegistro();
                if ($registro=="ok") {
                    
                    echo '<script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null,null, window.location.href);
                        }
                    </script>';
                    echo'<div class="alert alert-success">' .$_POST["rNombre"].'a sido registrado</div>';
                }
            ?>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    
</div>