<form class="row g-3">
    <input type="hidden" wire:model="student_id">
    <div class="col-md-4">
        <label for="FirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" wire:model="fname" placeholder="Enter First Name">
    </div>
    <div class="col-md-4">
        <label for="LastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" wire:model="lname"placeholder="Enter Last Name">
    </div>

    <div class="col-md-2">
        <label for="PhoneNumber" class="form-label">Phone</label>
        <input type="text" class="form-control" wire:model="phone"placeholder="Enter Phone ">
    </div>
    <div class="col-md-2">
        <label for="inputState" class="form-label">Gender</label>
        <select wire:model="gender" class="form-select">
            <option selected>Choose...</option>
            <option value="0">Male</option>
            <option value="1">Female</option>
        </select>
    </div>
    <div class="row" style="text-align: end">

        <div class="col-12">
            <button wire:click.prevent="Update" type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
