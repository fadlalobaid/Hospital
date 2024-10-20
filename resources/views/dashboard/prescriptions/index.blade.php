@extends("layout.dashboard")
@section('title')
Prescription - index
@endsection

@section('content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <x-alert type="success" />
        <x-alert type="info" />
        <x-alert type="danger" />
        <div class="card-body">
            <h4 class="card-title">Prescription</h4>
            <div class="d-grid gap-2 col-6 mx-auto">

                <a class="nav-link btn btn-outline-success " id="createbuttonDropdown" aria-expanded="false" href="{{ route('prescriptions.create') }}">Add Prescription</a>
            </div>
            </p>
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th> Doctor Name</th>
                            <th>  petient Name </th>
                            <th>Recipe Name</th>
                            <th> Recipe Date </th>
                            <th> instructions </th>
                            <th> Satting </th>
                            <th> Show </th>


                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($prescriptions as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td> {{ $item->doctor->name }}</td>
                            <td > {{ $item->patient->name }}</td>
                            <td> {{ $item->recipe_name }} </td>
                            <td>
                                {{ $item->recipe_date }}
                            </td>
                            <td>
                                {{ $item->instructions }}
                            </td>
                            <td>
                                <a href="{{ route('prescriptions.edit',$item->id) }}" class="btn btn-success m-1">
                                    <i class="mdi mdi-auto-fix fs-6"></i>
                                </a>

                                <form action="{{ route('prescriptions.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <Button type="submit" class="btn btn-danger m-1">
                                        <i class="mdi mdi-backspace fs-6"></i>
                                    </Button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('prescriptions.show', $item->id) }}" class="btn btn-warning h-25">
                                    <i class="mdi mdi-eye fs-6"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <td colspan="4">No Data</td>
                        @endforelse


                    </tbody>

                </table>
                {{ $prescriptions->links() }}
            </div>
        </div>
    </div>
</div>
@endsection









-----
