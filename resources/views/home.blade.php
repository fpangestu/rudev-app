@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="progress">
                <div class="progress-bar" style="width:0%">0%</div>
            </div> <br />
            <div class="card">
                <div class="card-header">Personal Information</div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="container">
                            <p>Basic</p>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Photo</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="inputFirstName">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="inputLastName">
                            </div>
                            <div class="col-12">
                                <label for="inputInstitution" class="form-label">Institution</label>
                                <input type="text" class="form-control" id="inputInstitution">
                            </div>
                            <div class="col-12">
                                <label for="inputOccupatoin" class="form-label">Occupatoin</label>
                                <input type="text" class="form-control" id="inputOccupatoin">
                            </div>
                        </div>
                        <div class="container" style="margin-top: 50px;">
                            <p>Contact</p>
                            <div class="col-12">
                                <label for="inputPhone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="inputPhone">
                            </div>
                            <div class="col-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail">
                            </div>
                        </div>
                        &nbsp;&nbsp;
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="progress">
                <div class="progress-bar" style="width:20%">20%</div>
            </div> <br />
            <div class="card">
                <div class="card-header">Payment</div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="container">
                            <p>Information</p>
                            <p>Curabitur ullamcorper magna ut odio rutrum mattis. Suspendisse potenti. Sed in lectus nec sapien porttitor scelerisque. Nam ante mi, interdum in tincidunt quis, adipiscing eget velit. Aliquam ornare elit vitae nisi ultricies eget rhoncus velit malesuada. Aliquam adipiscing, nulla varius lobortis elementum, mauris metus pellentesque velit, nec ultrices risus diam ac arcu.</p>
                        </div>
                        <div class="container" style="margin-top: 20px;">
                            <p>Payment Received</p>
                            <div class="col-12">
                                <label for="formReceived" class="form-label">Upload</label>
                                <input class="form-control" type="file" id="formReceived">
                            </div>
                        </div>
                        &nbsp;&nbsp;
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="progress">
                <div class="progress-bar" style="width:40%">40%</div>
            </div> <br />
            <div class="card">
                <div class="card-header">Payment Validation</div>
                <div class="card-body" style="text-align: center;">
                    <div class="icon icon--order-success svg add_bottom_15">
                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                            <g fill="none" stroke="#8EC343" stroke-width="2">
                                <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                            </g>
                        </svg>
                    </div>
                    <h2>Thanks for your booking!</h2>
                    <p>You'll receive a confirmation email at mail@example.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="progress">
                <div class="progress-bar" style="width:60%">60%</div>
            </div> <br />
            <div class="card">
                <div class="card-header">Paper Submission</div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="container">
                            <p>Information</p>
                            <p>Curabitur ullamcorper magna ut odio rutrum mattis. Suspendisse potenti. Sed in lectus nec sapien porttitor scelerisque. Nam ante mi, interdum in tincidunt quis, adipiscing eget velit. Aliquam ornare elit vitae nisi ultricies eget rhoncus velit malesuada. Aliquam adipiscing, nulla varius lobortis elementum, mauris metus pellentesque velit, nec ultrices risus diam ac arcu.</p>
                        </div>
                        <div class="container" style="margin-top: 20px;">
                            <div class="col-12">
                                <label for="formReceived" class="form-label">Submit Paper</label>
                                <input class="form-control" type="file" id="formReceived">
                            </div>
                        </div>
                        &nbsp;&nbsp;
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="progress">
                <div class="progress-bar" style="width:80%">80%</div>
            </div> <br />
            <div class="card">
                <div class="card-header">Paper Discussion</div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="container">
                            <p>Basic</p>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Photo</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="inputFirstName">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="inputLastName">
                            </div>
                            <div class="col-12">
                                <label for="inputInstitution" class="form-label">Institution</label>
                                <input type="text" class="form-control" id="inputInstitution">
                            </div>
                            <div class="col-12">
                                <label for="inputOccupatoin" class="form-label">Occupatoin</label>
                                <input type="text" class="form-control" id="inputOccupatoin">
                            </div>
                        </div>
                        <div class="container" style="margin-top: 50px;">
                            <p>Contact</p>
                            <div class="col-12">
                                <label for="inputPhone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="inputPhone">
                            </div>
                            <div class="col-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail">
                            </div>
                        </div>
                        &nbsp;&nbsp;
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="progress">
                <div class="progress-bar" style="width:100%">100%</div>
            </div> <br />
            <div class="card">
                <div class="card-header">Payment Validation</div>
                <div class="card-body" style="text-align: center;">
                    <div class="icon icon--order-success svg add_bottom_15">
                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                            <g fill="none" stroke="#8EC343" stroke-width="2">
                                <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                            </g>
                        </svg>
                    </div>
                    <h2>Thanks for your booking!</h2>
                    <p>You'll receive a confirmation email at mail@example.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
