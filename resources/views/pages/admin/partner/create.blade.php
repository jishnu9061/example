@extends('layouts.app')

@section('title', 'Dashboard | Greenveel')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Partners</h4>
                <div class="page-title-right">
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bx bx-plus"></i> Add
                        Partners</a>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add Partners</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="partnerForm" novalidate action="{{ route('partner.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- Display validation errors -->
                        <div id="validationErrors" class="alert alert-danger d-none">
                            <ul></ul>
                        </div>

                        <div class='repeater'>
                            <section class='repeatable'>
                                <div class='half-holder clearfix'>
                                    <label class='half'>
                                        <input name='images[]' class="form-control p-2" required='required' type='file' placeholder="partners image" />
                                    </label>
                                </div>
                            </section>
                        </div>
                        <div id="image-container"></div>
                        <input id='count' name='count' type='hidden' value='1'>
                        <input class="add_btn btn btn-primary mt-2" id="add_btn" type="button" value="+ Add New Item">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="datatable-buttons" class="table table-bordered nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Images</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($partners as $partner)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ \App\Http\Helpers\PartnerHelper::getPartnerImagePath($partner->image) }}"
                                                class="image-popup-desc">
                                                <img src="{{ \App\Http\Helpers\PartnerHelper::getPartnerImagePath($partner->image) }}"
                                                    class="img-fluid" alt="work-thumbnail" width="100">
                                            </a>
                                        </td>
                                        <td>
                                            <a data-href="{{ route('partner.delete', $partner->id) }}"
                                                class="btn btn-outline-secondary btn-sm delete-btn" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRsN/hYZyoD1t3R2TgC8X5dB2T2syuYrO6+rLdU5e" crossorigin="anonymous">
</script>
<script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        // Add the "remove" link to each section
        $(".repeatable").prepend(
            '<a class="remove btn btn-primary" href="javascript:void(0);"><i class="bx bx-x"></i></a>');

        // Update remove links visibility
        function updateRemoveLinks() {
            if ($(".repeatable").length > 1) {
                $(".repeatable").children(".remove").show();
            } else {
                $(".repeatable").children(".remove").hide();
            }
        }
        updateRemoveLinks();

        // Destroy function to handle remove button
        function destroy() {
            $(".remove").click(function() {
                $(this).parent(".repeatable").remove();
                updateRemoveLinks();
                $("#count").val($(".repeatable").length);
            });
        }
        destroy();

        // Add new input field for images
        $(document).on('click', '.add_btn', function() {
            var newInput = $(".repeatable").last().clone();
            newInput.find("input").val('');
            newInput.find(".remove").remove(); // Remove the remove button from the cloned input
            newInput.insertBefore(
            "#image-container"); // Insert the new input before the image container
            newInput.prepend(
                '<a class="remove btn btn-primary" href="javascript:void(0);"><i class="bx bx-x"></i></a>'
                );
            destroy();
            updateRemoveLinks();
            $("#count").val($(".repeatable").length);
        });
        destroy();
        updateRemoveLinks();
        // Initialize SweetAlert for delete confirmation

    });
</script>

<script>
    $(document).ready(function() {
        var App = {
            initialize: function() {
                $(document).on('click', '.delete-btn', function(e) {
                    e.preventDefault();
                    var row = $(this).closest('tr');
                    var url = $(this).data('href');
                    App.deleteItem(row, url);
                });
            },
            deleteItem: function(row, url) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to delete this partner!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    confirmButtonColor: '#0fb390'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'DELETE',
                            url: url,
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                row.remove();
                            //   location.reload();
                              toastr.success(response.message, 'Partner deleted successfully');
                            },
                            error: function(xhr) {
                                location.reload();
                            }
                        });
                    }
                });
            }
        };
        App.initialize();
    });
</script>
<script>
    $(document).ready(function() {
        $('#partnerForm').submit(function(event) {
            event.preventDefault(); // Prevent normal form submission

            // Perform Ajax request
            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle successful response (e.g., close modal, refresh page)
                    $('#myModal').modal('hide');
                    toastr.success(response.message, 'Partner uploaded successfully');
                    location.reload()
                },
                error: function(xhr) {
                    // Handle error response (e.g., display validation errors)
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        var errorList = '';
                        $.each(errors, function(key, value) {
                            errorList += '<li>' + value + '</li>';
                        });
                        $('#validationErrors ul').html(errorList);
                        $('#validationErrors').removeClass('d-none');
                    }
                }
            });
        });
    });
</script>
