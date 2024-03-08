<x-app-layout>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="py-12">
        <div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center"> ID </th>
                                <th class="text-center"> tevékenység ID </th>
                                <th class="text-center"> osztály ID </th>
                                <th class="text-center"> állapot </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bejegyzesek as $row)
                            <tr>
                                <td class="text-center"> {{$row['id']}} </td>
                                <td> {{$row['tevekenyseg_id']}} </td>
                                <td> {{$row['osztaly_id']}} </td>
                                <td> {{$row['allapot']}} </td>
                             </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>