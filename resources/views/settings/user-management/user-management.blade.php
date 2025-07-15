@extends('layouts.adminlte')

@section('subtitle', 'User Management')
@section('content_header_title', 'User Management')
{{-- @section('content_header_subtitle', 'Dashboard') --}}
@section('content_body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <div class="card-title">User Management</div>
                    <div class="btn btn-primary text-right ml-auto">Create User</div>
                </div>
                <div class="card-body">
                    <table id="sampleId" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>4</th>
                                <th>4</th>
                                <th>4</th>
                                <th>4</th>
                                <th>4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At necessitatibus aliquid atque
                                    qui vero reprehenderit ipsum perspiciatis, dicta voluptatem non facere illo incidunt
                                    odit perferendis, repellat corporis fuga velit cupiditate praesentium! In, maxime
                                    possimus eos illo aut quis et enim earum delectus architecto est eveniet veniam
                                    blanditiis, adipisci vero! Reiciendis esse fugiat impedit quod eveniet dicta aliquid
                                    laudantium libero pariatur, ad ipsam sit nam doloribus earum incidunt dolor quibusdam,
                                    praesentium quam mollitia, exercitationem hic provident ullam! Non numquam nesciunt eos
                                    molestiae vero! Sint enim sit fuga unde laudantium nesciunt odio obcaecati, vitae,
                                    ratione nostrum delectus aliquid. Sint rerum et alias libero qui, impedit numquam fugit
                                    accusantium. Iste libero voluptatem dicta. Facilis laboriosam repudiandae deserunt quod!
                                    Alias exercitationem porro nemo nostrum voluptas et iste, id ea, nesciunt molestias in
                                    ratione explicabo eum autem, magnam quae ut. Magni accusamus sequi, in odio quibusdam
                                    reprehenderit hic error? Molestias nam facere, eligendi quas non alias aspernatur
                                    commodi dolor sapiente provident, nihil, minima accusantium nisi. Dolorum hic doloremque
                                    debitis aliquid, sed sint earum harum dignissimos dolores perferendis eaque quae
                                    repellendus quia dolor sit ut voluptas magnam sequi architecto facilis reiciendis.
                                    Quidem quod corrupti expedita, sit, inventore quibusdam ratione at qui consectetur unde
                                    tempora quae soluta!</td>
                                <td>3</td>
                                <td>4</td>
                                <td>4</td>
                                <td>4</td>
                                <td>4</td>
                                <td>4</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            let datatable = $('#sampleId').DataTable({
                responsive: true
            });

            console.log(datatable);

        });
    </script>
@stop
