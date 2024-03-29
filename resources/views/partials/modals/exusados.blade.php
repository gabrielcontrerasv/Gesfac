<div id="modal_agendar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">SOLICITAR CITA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group col-12 col-md-12">
                        <label for="agendar_escuadron">Escuadron</label>
                    </div>
                    <div class="form-group col-12 col-md-12">
                        <label for="agendar_alumno">Alumno</label>
                        <select name="agendar_alumno" id="agendar_alumno" class="form-control">
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-12">
                        <label for="agendar_tipo_cita">Tipo Cita</label>
                    </div>
                    <div class="form-group col-12 col-md-12">
                        <label for="fecha_asignacion">Fecha de solicitud</label>
                        <input type="date" name="fecha_asignacion" id="fecha_asignacion" class="form-control" min='2019-11-01' value="{{$fecha_solicitud}}" disabled>
                    </div>
                    <div class="form-group col-12 col-md-12">
                        <label for="motivo">Motivo</label>
                        <input type="text" name="motivo" id="motivo" class="form-control">
                    </div>
                    <div class="form-group col-12 col-md-12">
                        <label for="agendar_descripcion">Descripción</label>
                        <textarea name="agendar_descripcion" id="agendar_descripcion" class="form-control">
                        </textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="AGENDAR">
                </div>
            </form>
        </div>
    </div>
</div>
