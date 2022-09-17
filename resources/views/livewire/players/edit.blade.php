<div>
   <div class="container col-md-6 offset-md-3 mt-5">
    <div class="card">
        <div class="card-header bg-primary">
            <h3>Edit Player</h3>
        </div>
        <div class="card-body bg-info">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Name</label>
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="address">
                <label for="address">Address</label>
                @error('address')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="contact">
                <label for="contact">Contact</label>
                @error('contact')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="age">
                <label for="age">Age</label>
                @error('age')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="year" class="form-select" wire:model.defer="team">
                    <option hidden="true">Team</option>
                    <option selected disabled>Year</option>
                    <option value="Onic Philippines">Onic</option>
                    <option value="Evos">Evos</option>
                    <option value="BlackList Internasional">Blck</option>
                    <option value="Echo Esports">Echo Esports</option>
                </select>
                <label for="team">Team</label>
                @error('team')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group mb-3 grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit" wire:click="editPlayer()">
                    Edit Team
                </button>
            </div>
    </div>
   </div>
</div>
<style>
    body {
        background-image:url('{{asset('/images/onic.jpg')}}');;
    }
</style>
