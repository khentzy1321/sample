
<div>
    <div class="card bg-info">
        <div class="card-header">
            <h3>Add Players</h3>
        </div>
        <div class="card-body">
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
                <button class="btn btn-success  " type="submit" wire:click="addPlayer()">
                    Add Team
                </button>
            </div>
        </div>
    </div>
</div>
