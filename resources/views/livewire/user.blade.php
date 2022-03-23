<div>
    <div class="my-5">
        <input type="text" class="form-control form-control-lg" wire:model="search">
    </div>

    <h4>Hasil Pencarian :</h4>
    <div class="row">
        @forelse ($result as $item)
            <div class="col-4 my-2">
                <div class="card">
                    <div class="card-body">
                        <p>Name: {{ $item['name'] }}</p>
                        <p>Email: {{ $item['email'] }}</p>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
</div>
