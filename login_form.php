                    
							<!-- Formulario de login -->
                            <form  method="post" action="login.php" autocomplete="on"> 
                                
								
                                <p> 
                                    <label for="username" class="uname"> Usuario </label>
                                    <input id="username" name="username" required="required" type="text"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Contraseña </label>
                                    <input id="password" name="password" required="required" type="password"/> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Entrar" /> 
								</p>
                                <p class="change_link">
									¿No eres miembro ?
									<a href="#toregister" class="to_register">Regístrate</a>
								</p>
                            </form>