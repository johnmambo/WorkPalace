<div>
    <div id="wizard1" class="wizard-demo wizard clearfix" role="application">
        <div class="steps clearfix">
            <ul role="tablist">
                <li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="wizard1-t-0"
                        href="#wizard1-h-0" aria-controls="wizard1-p-0"><span class="current-info audible">current step:
                        </span><span class="number">1</span>
                        <span class="title">Job Information</span></a></li>
                <li role="tab" class="disabled" aria-disabled="true"><a id="wizard1-t-1" href="#wizard1-h-1"
                        aria-controls="wizard1-p-1"><span class="number">2</span> <span class="title">Scope</span></a></li>
                <li role="tab" class="disabled last" aria-disabled="true"><a id="wizard1-t-2" href="#wizard1-h-2"
                        aria-controls="wizard1-p-2"><span class="number">3</span> <span class="title">Payment
                            Details</span></a></li>
            </ul>
        </div>
        <div class="content clearfix">
            <h3 id="wizard1-h-0" tabindex="-1" class="title current">Job Information</h3>
            <div id="wizard1-p-0" role="tabpanel" aria-labelledby="wizard1-h-0" class="body current"
                aria-hidden="false">
                <div class="row g-3">
                    <div class="col-sm-10">
                        <label class="form-label">HeadLine</label>
                        <input type="text" class="form-control" placeholder="Headline">
                    </div><!-- col -->
                    <div class="col-sm-10">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" placeholder="Title">
                    </div><!-- col -->
                </div><!-- form-row -->
            </div>
            <h3 id="wizard1-h-1" tabindex="-1" class="title">Scope</h3>
            <div id="wizard1-p-1" role="tabpanel" aria-labelledby="wizard1-h-1" class="body" aria-hidden="true"
                style="display: none;">
                <p class="mb-4">Description</p>
                <div class="row g-3">
                    <div class="col-sm-12">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="Firstname">
                    </div><!-- col -->
                    <div class="col-12">
                        <label class="form-label">Skills</label>
                        <textarea class="form-control" rows="2" placeholder="Enter some notes"></textarea>
                    </div><!-- col -->
                </div><!-- row -->
            </div>
            <h3 id="wizard1-h-2" tabindex="-1" class="title">Payment Details</h3>
            <div id="wizard1-p-2" role="tabpanel" aria-labelledby="wizard1-h-2" class="body" aria-hidden="true"
                style="display: none;">
                <p class="mb-4"> Project Budget</p>
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Hourly</label>
                        <input type="text" class="form-control" placeholder="$/Hour">
                    </div><!-- col -->
                    <div class="col-sm-6">
                        <label class="form-label">Per Project</label>
                        <input type="text" class="form-control" placeholder="$/Project">
                    </div><!-- col -->
                    
                </div><!-- row -->
            </div>
        </div>
        <div class="actions clearfix">
            <ul role="menu" aria-label="Pagination">
                <li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li>
                <li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li>
                <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li>
            </ul>
        </div>
    </div>
</div>
