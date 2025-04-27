<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="update">
                <input type="hidden" wire:model="calorieId">
                <div class="form-group">
                    <label>TITLE</label>
                    <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Title">
                    @error('name')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>KONTEN</label>
                   <textarea wire:model="calorie" class="form-control @error('calorie') is-invalid @enderror" rows="4" placeholder="Masukkan Konten"></textarea>
                   @error('calorie')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
        </div>
    </div>
</div>