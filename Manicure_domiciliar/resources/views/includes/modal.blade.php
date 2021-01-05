<div class="modal fade" id="modal-create-manicure" style="display: none; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Cadastrar Manicure</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <form id="formmanicurecreate">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nome:</label>
                <input type="text" class="form-control" id="manicure-name" value="Roger neves Da silva">
              </div>

              <div class="form-group">
                <label for="message-text" class="col-form-label">E-mail:</label>
                <input type="text" class="form-control" id="manicure-email" value="rgyr2010@hotmail.com">
              </div>

              <div class="form-group">
                <label for="message-text" class="col-form-label">Whatzap:</label>
                <input type="text" class="form-control" id="manicure-zap" value="990271287">
              </div>


              <div class="form-group">
                <label for="message-text" class="col-form-label">Bairro:</label>
                <input type="text" class="form-control" id="manicure-bairro" value="Copacabana">
              </div>

              <div class="form-group">
                <label for="message-text" class="col-form-label">Cep:</label>
                <input type="text" class="form-control" id="manicure-cep" value="2200712060">
              </div>

              <div class="form-group">
                <label for="message-text" class="col-form-label">Foto:</label>
                <input type="file" class="form-control" id="manicure-foto">
              </div>

            </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary save-create-manicure">Salvar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</div>



  <div class="modal_deletar fade" tabindex="-1" id="modal-create-admin" style="display: none; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Cadastrar Admin</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-admin-create">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Destinatário:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Mensagem:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary save-create-admin">Salvar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  