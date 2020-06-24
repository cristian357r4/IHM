<div class="modal" id="colacion2">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Colacion</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <table class="table table-dark container-fluid">
                    <tbody>
                    <tr><!-- TODO Integrar un modal Para ver la tabla de alimentos compatibles-->
                        <th>
                            <select class="selectpicker" multiple data-max-options="1" data-style="btn btn-primary btn-block" title="Verduras">
                                <option>Acelga cocida 1/2 taza</option>
                                <option>Apio cocido 3/4 taza</option>
                                <option>Calabacita 1 pza</option>
                                <option>Lechuga 3 tazas</option>
                                <option>Chayote cocido 1/2 taza</option>
                            </select>
                        </th>
                        <td><a href="#" class="btn btn-primary btn-block disabled" style="font-family: 'Britannic Bold', monospace" role="button">1</a></td>
                    </tr>
                    <tr>
                        <th>
                            <select class="selectpicker" multiple data-max-options="1" data-style="btn btn-primary btn-block" title="Frutas">
                                <option>Durazno amarillo 2 piezas 135g</option>
                                <option>Melo picado 1 taza</option>
                                <option>Papaya picada 3/4 de taza</option>
                                <option>Piña picada 3/4 de taza</option>
                                <option>Uva Verde 1 taza</option>
                            </select>
                        </th>
                        <td><a href="#" class="btn btn-primary btn-block disabled" style="font-family: 'Britannic Bold', monospace" role="button">1</a></td>
                    </tr>
                    <tr>
                        <th>
                            <select class="selectpicker" multiple data-max-options="1" data-style="btn btn-primary btn-block" title="Cereales y Tuberculos">
                                <option>Bolillo sin migajon 1/3 pieza</option>
                                <option>Elote blanco cocido 82g</option>
                                <option>Palomitas sin grasa 2 y 1/2 tazas</option>
                                <option>Galletas marias 5 piezas</option>
                                <option>pasta cocida 1/2 taza</option>
                            </select>
                        </th>
                        <td><a href="#" class="btn btn-primary btn-block disabled" style="font-family: 'Britannic Bold', monospace" role="button">1</a></td>
                    </tr>
                    <tr>
                        <th>
                            <select class="selectpicker" multiple data-max-options="1" data-style="btn btn-primary btn-block" title="Origen Animal">
                                <option>Atun en agua 1/5 de taza</option>
                                <option>Clara de huevo 2 piezas</option>
                                <option>Pechuga de pollo sin piel 30g</option>
                                <option>Atun en aceite 25g</option>
                                <option>Barbacoa maciza 50g</option>
                            </select>
                        </th>
                        <td><a href="#" class="btn btn-primary btn-block disabled" style="font-family: 'Britannic Bold', monospace" role="button">1</a></td>
                    </tr>
                    <tr>
                        <th>
                            <select class="selectpicker" multiple data-max-options="1" data-style="btn btn-primary btn-block" title=" Aceites">
                                <option>Aceite Comestible 1 ctda.</option>
                                <option>Aguacate has/mediano 31g</option>
                                <option>Crema 1 ctda.</option>
                                <option>Mayonesa 1 ctda.</option>
                                <option>Guacamole 2 cda.</option>
                            </select>
                        </th>
                        <td><a href="#" class="btn btn-primary btn-block disabled" style="font-family: 'Britannic Bold', monospace" role="button">1</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>

<script>
    $('.selectpicker').selectpicker({
        maxOptionsText: function (numAll, numGroup) {
            return [
                (numAll === 1) ? 'Solo puedes seleccionar {n} elementos' : 'Solo puedes seleccionar {n} elementos',
                (numGroup === 1) ? 'Solo puedes seleccionar {n} elementos' : 'Solo puedes seleccionar {n} elementos'
            ];
        }
    });
</script>