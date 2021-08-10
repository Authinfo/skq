<form method="POST">
    @csrf
    <div class="container-fluid mt-10">
        <div class="row col d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card-wrapper">
                    <!-- Form controls -->
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <form>
                                <!-- Category Products -->
                                <div class="form-group row">
                                    <label for="tanggalbooking" class="col-md-2 col-form-label form-control-label">Tanggal Permintaan</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" id="tanggalbooking">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Layanan</label>
                                    <div class="row col-md-10">
                                        <tr>
                                            <td>
                                                <div class="col-md-6">
                                                    <div wire:click="
                                                        @if($dini == false)
                                                        openDini
                                                        @else
                                                        closeDini
                                                        @endif" class="custom-control custom-radio mb-3">
                                                        <input type="radio" name="custom-radio-1" class="custom-control-input" id="customRadio1" >
                                                        <label class="custom-control-label" for="customRadio1">Perawatan Cegah Dini Covid-19</label>
                                                    </div>
                                                    <div wire:click="
                                                       @if($isoman == false)
                                                        openIsoman
                                                        @else
                                                        closeIsoman
                                                        @endif"
                                                         class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio2" type="radio">
                                                        <label class="custom-control-label" for="customRadio2">Perawatan Isoman Covid-19</label>
                                                    </div>
                                                    <div wire:click="
                                                        @if($jalan == false)
                                                        openJalan
                                                        @else
                                                        closeJalan
                                                        @endif"
                                                         class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio3" type="radio">
                                                        <label class="custom-control-label" for="customRadio3">Rawat Jalan</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </div>
                                </div>
                                <div class="form-group row dini"
                                @if ($dini == false)
                                    @else>
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Perawatan Cegah Dini Covid-19</label>
                                    <div class="row col-md-10" >
                                        <tr>
                                            <td>
                                                <div class="col-md-6">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio10" type="radio">
                                                        <label class="custom-control-label" for="customRadio10">Tes Rapid Antigen</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio11" type="radio">
                                                        <label class="custom-control-label" for="customRadio11">Tes RT-PCR</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio31" type="radio">
                                                        <label class="custom-control-label" for="customRadio31">Imune Booster</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio4" type="radio">
                                                        <label class="custom-control-label" for="customRadio4">Vaksin</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio5" type="radio">
                                                        <label class="custom-control-label" for="customRadio5">Lab Darah</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </div>
                                </div>
                                @endif
                                <div class="form-group row"
                                @if ($isoman == false)
                                    @else    >
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Perawatan Isoman Covid-19</label>
                                    <div class="row col-md-10">
                                        <tr>
                                            <td>
                                                <div class="col-md-6">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio122" type="radio">
                                                        <label class="custom-control-label" for="customRadio122">Gold</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio222" type="radio">
                                                        <label class="custom-control-label" for="customRadio222">Basic</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </div>
                                </div>
                                @endif
                                <div class="form-group row"
                                @if ($jalan == false)
                                    @else >
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Rawat Jalan</label>
                                    <div class="row col-md-10">
                                        <tr>
                                            <td>
                                                <div class="col-md-6">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio1222" type="radio">
                                                        <label class="custom-control-label" for="customRadio122">Tindakan Medis Minor</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio2222" type="radio">
                                                        <label class="custom-control-label" for="customRadio2222">Perawatan Pasien Diabetes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio22422" type="radio">
                                                        <label class="custom-control-label" for="customRadio22422">Fisioterapi</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </div>
                                </div>
                                @endif
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Jenis Booking</label>
                                    <div class="row col-md-10">
                                        <tr>
                                            <td>
                                                <div class="col-md-6">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio132" type="radio">
                                                        <label class="custom-control-label" for="customRadio132">Saya Sendiri</label>
                                                    </div>
                                                    <div  wire:click="
                                                        @if($grubs == false)
                                                        openGrubs
                                                        @else
                                                        closeGrubs
                                                        @endif"
                                                          class="custom-control custom-radio mb-3">
                                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio223" type="radio">
                                                        <label class="custom-control-label" for="customRadio223">Orang Lain</label>
                                                    </div>
                                                    <!--        <div class="custom-control custom-radio mb-3">
                                                                <input name="custom-radio-1" class="custom-control-input" id="customRadio312" type="radio" onclick="func(0);">
                                                                <label class="custom-control-label" for="customRadio312">Group</label>
                                                            </div> -->
                                                </div>
                                            </td>
                                        </tr>
                                    </div>
                                </div>
                                <div
                                @if ($grubs == false)
                                    @else >
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-md-2 col-form-label form-control-label">Nama Lengkap</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-md-2 col-form-label form-control-label">Email</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="email" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-md-2 col-form-label form-control-label">Nomor Identitas</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggallahir" class=" col-md-2 col-form-label form-control-label">Tanggal Lahir</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="date" id="tanggallahir">
                                        </div>
                                    </div>
                                @endif
                                </div>
                                <button type="button" class="btn btn-primary btn-lg btn-block">Booking</button>
                                <button type="button" class="btn btn-secondary btn-lg btn-block" >
                                    <a href="{{ URL::previous() }}">Go Back</a>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

