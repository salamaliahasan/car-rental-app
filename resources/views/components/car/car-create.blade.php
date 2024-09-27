<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Car</h5>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">

                                <label class="form-label mt-2">Name</label>
                                <input type="text" class="form-control" id="carName">
                                <label class="form-label mt-2">Brand</label>
                                <input type="text" class="form-control" id="carBrand">
                                <label class="form-label mt-2">Model</label>
                                <input type="text" class="form-control" id="carModel">
                                <label class="form-label mt-2">Year</label>
                                <input type="text" class="form-control" id="carYear">
                                <label class="form-label mt-2">Car Type</label>
                                <input type="text" class="form-control" id="carType">

                                <label class="form-label mt-2">Daily Rent Price</label>
                                <input type="text" class="form-control" id="dailyRentPrice">




                                <label class="form-label">Availability</label>
                                <select type="text" class="form-control form-select" id="carAvailability">
                                    <option value="">Select Availability</option>
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                                <br />

                                <img class="w-15" id="newImg" src="{{ asset('images/default.jpg') }}" />
                                <br />
                                <label class="form-label">Image</label>
                                <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" type="file"
                                    class="form-control" id="carImg">


                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modal-close" class="btn bg-gradient-primary mx-2" data-bs-dismiss="modal"
                    aria-label="Close">Close</button>
                <button onclick="Save()" id="save-btn" class="btn bg-gradient-success">Save</button>
            </div>
        </div>
    </div>
</div>


<script>
    async function Save() {

        //let carCategory = document.getElementById('carCategory').value;
        let carName = document.getElementById('carName').value;
        let carBrand = document.getElementById('carBrand').value;
        let carModel = document.getElementById('carModel').value;
        let carYear = document.getElementById('carYear').value;
        let carType = document.getElementById('carType').value;

        let dailyRentPrice = document.getElementById('dailyRentPrice').value;
        let carAvailability = document.getElementById('carAvailability').value;
        let carImg = document.getElementById('carImg').files[0];

        if (carName.length === 0) {
            errorToast("Car Name Required !")
        } else if (carBrand.length === 0) {
            errorToast("Car Brand Required !")
        } else if (carModel.length === 0) {
            errorToast("Car Model Required !")
        } else if (carYear.length === 0) {
            errorToast("Car Year Required !")
        } else if (dailyRentPrice.length === 0) {
            errorToast("Car daily Rent Price Required !")
        } else if (carAvailability.length === 0) {
            errorToast("Car availability Required !")
        } else if (!carImg) {
            errorToast("Car Image Required !")
        } else {

            document.getElementById('modal-close').click();

            let formData = new FormData();
            formData.append('img', carImg)
            formData.append('name', carName)
            formData.append('brand', carBrand)
            formData.append('model', carModel)
            formData.append('year', carYear)
            formData.append('car_type', carType)
            formData.append('daily_rent_price', dailyRentPrice)
            formData.append('availability', carAvailability)

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            showLoader();
            let res = await axios.post("/create-car", formData, config)
            hideLoader();

            if (res.status === 201) {
                successToast('Request completed');
                document.getElementById("save-form").reset();
                await getList();
            } else {
                errorToast("Request fail !")
            }
        }
    }
</script>
