<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="card">
            <div class="card-header fw-bold">
                Coba Livewire
            </div>
            <div class="card-body">
                <div class="form-group mb-4">
                    <label class="form-label">Kategori</label>
                    <select class="form-control" wire:model="category" wire:change="getSubcategories()">
                        <option selected disabled value="choose">Silahkan pilih kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Subkategori</label>
                    <button class="btn btn-dark btn-sm" style="width: 100%" type="button"
                            disabled
                            wire:loading
                            wire:target="getSubcategories">
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                    <select
                        class="form-control"
                        wire:loading.class="d-none"
                        wire:target="getSubcategories"
                    >
                        <option selected disabled>Silahkan pilih subkategori</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>