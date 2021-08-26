


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Welcome..{{ Auth::user()->name }}

        </h2>
    </x-slot>

<br><br>
<strong> Add New Project</strong>

<form class="row g-3" action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="col-md-6">
      <label for="projectName" class="form-label">Project Name</label>
      <input type="projectName" class="form-control" id="projectName" name="projectName">
    </div>
    <div class="col-md-4">
        <label for="Country" class="form-label">Country</label>
        <select id="Country" class="form-select" name="Country">
          <option selected>Choose...</option>
          <option>Bahrain</option>
          <option>Qatar</option>
          <option>UAE</option>

        </select>
      </div>
      <div class="mb-3">
        <label for="projectDetail" class="form-label">Project Detail</label>
        <textarea class="form-control" id="projectDetail" rows="3" name="projectDetail"></textarea>
      </div>
    <div class="col-12">
      <label for="projectSource" class="form-label">Source</label>
      <input type="text" class="form-control" id="projectSource" placeholder="Add Project source" name="projectSource">
    </div>
    <div class="col-12">
      <label for="projectStatus" class="form-label">Status</label>
      <input type="text" class="form-control" id="projectStatus" placeholder="Pending, Live, Completed" name="projectStatus">
    </div>
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </form>




</x-app-layout>