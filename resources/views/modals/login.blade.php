<!-- Login -->
<div class="modal modal__sm fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="oa-close"></i>
                </button>
                <h4 class="modal-title">Sign In</h4>
            </div>
            <div class="modal-body p-t-35 p-r-25 p-b-35 p-l-25">
                <div class="container-fluid">
                    <div class="row connection">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <section class="login">
                                @include('forms.login')
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
