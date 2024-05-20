<div class="">
    @if (Session::has('success'))
    <div class="alert alert-info">{{ Session::get('success') }}</div>                                                
    @endif
    <form wire:submit.prevent="AddConstant">
        <div class="row">
            <div class="card bg-light">
                <div class="card-header">
                    <h6 class="card-title">Motif de la consultation</h6>
                    <input type="text" class="form-control" wire:model='pattern' name="pattern" placeholder="Malaise au niveau du ventre">
                </div>
            </div>
        </div>
        {{-- <div class="row mt-2">
            <div class="card bg-light" >
                <div class="card-body">
                    <h5 class="card-title">Constante Vitale</h5>
                    <p class="card-text">
                        <input type="text" wire:model='weight' name="weight" class="form-control mb-2" placeholder="Le Poids en Kg">
                        @error('weight')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <input type="text" wire:model='size' name="size" class="form-control mb-2" placeholder="La Taille en Cm">
                        @error('size')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <input type="text" wire:model='temperature' name="temperature" class="form-control mb-2" placeholder="La Temperature C">
                        @error('temperature')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <input type="text" wire:model='pulse' name="pulse" class="form-control mb-2" placeholder="Pression arterielle Ex: 8/12">
                        @error('pulse')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <input type="text" wire:model='frequence' name="frequence" class="form-control mb-2" placeholder="Frequence Cardiaque Ex: 70">
                        @error('frequence')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <textarea wire:model='observation' name="observation" class="form-control" placeholder="Observation" id="" cols="30" rows="10">
                            Taille
                        </textarea>
                        @error('observation')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </p>
                </div>
            </div>
        </div> --}}

        {{-- Traitement --}}
        
            {{-- <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                <h3 class="card-title">
                    constante vital
                </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <textarea id="summernote">
                    Place <em>some</em> <u>text</u> <strong>here</strong>
                </textarea>
                </div>
                
            </div>
            </div> --}}
            <!-- /.col-->                      

        {{-- End Traitement --}}
        <div class="row mt-2">
            <div class="card bg-light" >
                <div class="card-footer">
                    <div class="">
                        <span class="card-title text-strong">Traitement A suivre</span>
                        <span wire:click='Increment()' class="btn btn-info float-end mb-2">Ajouter</span>
                    </div>
                    {{ $addCard }}
                    @for ($i = 1; $i < $addCard; $i++)
                    <p class="card-text">
                        <input type="text" name="drugs" wire:model="Increment.{{ $i }}.drugs" class="form-control mb-2" placeholder="traitement">
                        @error('drugs')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <input type="text" name="pace" wire:model="pace" class="form-control mb-2" placeholder="Frequence">
                        @error('pace')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <span>{{ $i }}</span>
                        <span wire:click='Decrement()' class="btn btn-danger float-end">Diminuer</span>
                    </p>
                    {{-- $cardInputs as $key => $cardInput --}}
{{-- wire:model="cardsInputs.{{ $key }}.drugs" --}}
                    @endfor
                    
                    
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <input type="submit" value="Relever" class="btn btn-primary">
        </div>
    </form>
</div>