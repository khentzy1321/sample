<div>
    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header">
                <h3>Delete Player??</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{$this->player->name}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$this->player->address}}</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>{{$this->player->contact}}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer ">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger btn-sm" wire:click="deletePlayer()">
                        delete
                    </button>
                    <button class="btn btn-success btn-sm mx-2"  >
                        back
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        background-image:url('{{asset('/images/onic.jpg')}}');;
    }
</style>
