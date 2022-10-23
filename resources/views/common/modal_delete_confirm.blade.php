<div class="modal fade" id="modal_confirm_delete_role_{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="modal_delete_confirm"
     aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete confirm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close_modal" data-dismiss="modal">Close</button>
                <form action="{{ route('roles.destroy', $role->id ) }}"
                      method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">OK. Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
