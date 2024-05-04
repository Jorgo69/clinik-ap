<div class="">
    @if (Session::has('success'))
    <div class="alert alert-info">{{ Session::get('success') }}</div>                                                
    @endif
    <form wire:submit.prevent="AddConstant">
    <div class="row">
        <div class="card bg-light" >
            <div class="card-body">
                <h5 class="card-title">Constante Vitale</h5>
                <p class="card-text">
                    <input type="text" name="weight" class="form-control mb-2" placeholder="Le Poids en Kg">
                    @error('weight')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input type="text" name="size" class="form-control mb-2" placeholder="La Taille en Cm">
                    @error('size')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input type="text" name="temperature" class="form-control mb-2" placeholder="La Temperature C">
                    @error('temperature')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input type="text" name="pulse" class="form-control mb-2" placeholder="Pression arterielle Ex: 8/12">
                    @error('pulse')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input type="text" name="frequence" class="form-control mb-2" placeholder="Frequence Cardiaque Ex: 70">
                    @error('frequence')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <textarea name="observation" class="form-control" placeholder="Observation" id="" cols="30" rows="10"></textarea>
                    @error('observation')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="card bg-light" >
            <div class="card-body">
                <div class="">
                    <span class="card-title text-strong">Traitement A suivre</span>
                    <span class="btn btn-info float-end mb-2">Ajouter</span>
                </div>
                {{-- @foreach ($cardInputs as $key => $cardInput)
                <p class="card-text">
                    <input type="text" name="drugs" wire:model="cardsInputs.{{ $key }}.drugs" class="form-control mb-2" placeholder="traitement">
                    @error('drugs')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input type="text" name="pace" wire:model="cardsInputs.{{ $key }}.pace" class="form-control mb-2" placeholder="Frequence">
                    @error('pace')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <button class="btn btn-danger float-end">Diminuer</button>
                </p>
                @endforeach --}}
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <input type="submit" value="Relever" class="btn btn-primary">
    </div>
    </form>
</div>