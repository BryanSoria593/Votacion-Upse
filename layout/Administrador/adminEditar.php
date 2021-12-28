<h3 class="msg-editar">Editar candidatos</h2>
    <div class="containeEditar">
        <div class="containerEditar__listas">
            <div>
                Selecciona la lista a editar
                <select>
                    <option disabled="">Selecciona una opción</option>
                    <option value="">A</option>
                    <option value="">B</option>
                    <option value="">C</option>
                    <option value="">D</option>
                    <option value="">E</option>
                    <option value="">F</option>
                </select>
            </div>
        </div>
        <div class="containerEditar__datos">
            <div class="containerEditar__msg">
                <h3>Editar lista
                    <span>A</span>
                </h3>
            </div>
            <div class="containerPostulantes">
                <div class="containerPostulantes__rector">
                    <h4>Datos del candidato a rector</h4>
                    <div class="containerPostulantes__rector-img">
                        <img src="https://gmedia.playstation.com/is/image/SIEPDC/grand-theft-auto-v-key-art-image-block-en-02-07aug20?$1600px$" alt="" width="100" height="100">
                    </div>
                    <div class="containerPostulantes__datosR">
                        <table class="table">
                            <thead>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Cédula</th>
                                <th>Correo</th>
                                <th>Cargo</th>
                                <th>Facultad</th>
                                <th>Imágen</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nombres">Bryan Andrés</td>
                                    <td data-label="Apellidos">Soria Méndez</td>
                                    <td data-label="Cedula">010101010101</td>
                                    <td data-label="Correo">bryan.soriam@upse.edu.ec</td>
                                    <td data-label="Cargo">Estudiante</td>
                                    <td data-label="Facultad">Facsistel</td>
                                    <td data-label="Imágen"><input class="campo-imagen" type="file" name="img-vice" id="img-vice" accept=".jpg, .png, .jpeg"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="buscarCandidato-Rector">
                        <label for="cedula-rector">Cédula del nuevo candidato </label>
                        <br>
                        <input type="text" name="cedula-vice" id="cedula-v" placeholder="Ingrese la cédula">
                        <input type="submit" value="Buscar">
                    </div>
                </div>
                <div class="separador"></div>
                <div class="containerPostulantes__vice">
                    <h4>Datos del candidato a vicerector</h4>
                    <div class="containerPostulantes__vice-img">
                        <img src="https://gmedia.playstation.com/is/image/SIEPDC/grand-theft-auto-v-key-art-image-block-en-02-07aug20?$1600px$" alt="" width="100" height="100">
                    </div>
                    <div class="containerPostulantes__datosV">
                        <table class="table">
                            <thead>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Cédula</th>
                                <th>Correo</th>
                                <th>Cargo</th>
                                <th>Facultad</th>
                                <th>Ímágen</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nombres">Bryan Andrés</td>
                                    <td data-label="Apellidos">Soria Méndez</td>
                                    <td data-label="Cedula">010101010101</td>
                                    <td data-label="Correo">bryan.soriam@upse.edu.ec</td>
                                    <td data-label="Cargo">Estudiante</td>
                                    <td data-label="Facultad">Facsistel</td>
                                    <td data-label="Imagen"><input class="campo-imagen" type="file" name="img-vice" id="img-vice" accept=".jpg, .png, .jpeg"></td>  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="buscarCandidato-Vice">
                        <label for="cedula-rector">Cédula del nuevo candidato </label>
                        <br>
                        <input type="text" name="cedula-vice" id="cedula-v" placeholder="Ingrese la cédula">
                        <input type="submit" value="Buscar">
                    </div>
                </div>
            </div>
            <input class="enviar" type="submit" value="Guardar datos">        
            
        </div>
    </div>