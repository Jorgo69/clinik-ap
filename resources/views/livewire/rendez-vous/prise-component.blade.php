<form action="">
<div class="modal-body">
    <select name="" class="form-select mb-3"    id="">
      @forelse ($patients as $patient)
      <option value="">Selectionner le patient</option>
        <option value="{{$patient->id}}">{{$patient->name. ' '.$patient->firstname }}</option>
      @empty
      <option value="">Aucun Patient</option>  
      @endforelse
    </select>

    <select class="form-select mb-3" name="" id="">
      <option value="">Le type de specialiste</option>
    </select>

    <select class="form-select mb-3" name="" id="">
      <option value="Les specialite">Docteur generaliste</option>
      <option value="Les specialite">Docteur generaliste</option>
      <option value="Les specialite">Docteur cardio</option>
      <option value="Les specialite">Docteur cardio</option>
      <option value="Les specialite">Docteur dentiste</option>
      <option value="Les specialite">Docteur dentiste</option>
    </select>
    
    <input type="date" name="date" class="form-control mb-2" id="">
    <input type="time" name="time" class="form-control mb-2" id="">
    <input type="text" name="pattern" class="form-control" placeholder="Motif de la Consultation">
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
    <input type="submit" class="btn btn-primary" value="Sauvegarder">
</div>
</form>