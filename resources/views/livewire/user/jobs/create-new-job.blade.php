<div>
    <div id="wizard1" class="wizard-demo wizard clearfix" role="application">
        <form id="wrappeds" wire:submit.prevent="addJobDetails" method="post" "
            autocomplete="off" >
        <div class="steps clearfix">
            <ul role="tablist">
                <li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="wizard1-t-0"
                        href="#wizard1-h-0" aria-controls="wizard1-p-0"><span class="current-info audible">current step:
                        </span><span class="number">1</span>
                        <span class="title">Job Information</span></a></li>
                <li role="tab" class="disabled" aria-disabled="true"><a id="wizard1-t-1" href="#wizard1-h-1"
                        aria-controls="wizard1-p-1"><span class="number">2</span> <span class="title">Scope</span></a>
                </li>
                <li role="tab" class="disabled last" aria-disabled="true"><a id="wizard1-t-2" href="#wizard1-h-2"
                        aria-controls="wizard1-p-2"><span class="number">3</span> <span class="title">Payment
                            Details</span></a></li>
            </ul>
        </div>
        
        <div class="content clearfix">
            @if ($currentstep == 1)
            <h3 id="wizard1-h-0" tabindex="-1" class="title current">Job Information</h3>
            <div id="wizard1-p-0" role="tabpanel" aria-labelledby="wizard1-h-0" class="body current"
                aria-hidden="false">
                <div class="row g-3">
                    <div class="col-sm-10">
                        <label class="form-label">HeadLine</label>
                        <input type="text" wire:model="headline"
                            class="form-control @error('headline') is-invalid @enderror">
                        @error('headline')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror
                    </div><!-- col -->
                    <div class="col-sm-10">
                        <label class="form-label">Title</label>
                        <input type="text" wire:model="title"
                            class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-sm-10">
                        <label class="form-label">Job Category</label>
                        <select wire:model="category_name"
                            class="form-control @error('category_name') is_invalid @enderror">
                            <option value="">Click to select</option>
                            @foreach ($jobcategories as $item)
                                <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                            @endforeach
                        </select>
                        @error('category_name')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <!-- col -->
                </div><!-- form-row -->
            </div>
            @endif
            @if ($currentstep == 2)
            <h3 id="wizard1-h-1" tabindex="-1" class="title">Scope</h3>
            <div id="wizard1-p-1" role="tabpanel" aria-labelledby="wizard1-h-1" class="body" aria-hidden="true"
                style="display: none;">
                <p class="mb-4">Description</p>
                <div class="row g-3">
                    <div class="col-sm-12">
                        <label class="form-label">Description</label>
                        <input type="text" wire:model="description"
                            class="form-control @error('description') is-invalid @enderror">
                        @error('description')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror
                    </div><!-- col -->
                    <div class="col-12">
                        <label class="form-label">Skills</label>
                        <textarea rows="2" type="text" wire:model="skills"
                            class="form-control @error('skills') is-invalid @enderror"> placeholder="Enter skills"></textarea>
                        @error('skills')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror
                    </div><!-- col -->
                </div><!-- row -->
            </div>
            @endif
            @if ($currentstep == 3)
            <h3 id="wizard1-h-2" tabindex="-1" class="title">Payment Details</h3>
            <div id="wizard1-p-2" role="tabpanel" aria-labelledby="wizard1-h-2" class="body" aria-hidden="true"
                style="display: none;">
                <p class="mb-4"> Project Budget</p>
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Hourly</label>
                        <input type="text" wire:model="hourly_pay" placeholder="$/Hour"
                                class="form-control @error('hourly_pay') is-invalid @enderror">
                            @error('hourly_pay')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                    </div><!-- col -->
                    <div class="col-sm-6">
                        <label class="form-label">Per Project</label>
                        <input type="text" class="form-control" placeholder="$/Project">
                        <input type="text" wire:model="project_pay" placeholder="$/Project"
                                class="form-control @error('project_pay') is-invalid @enderror">
                            @error('project_pay')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                    </div><!-- col -->

                </div><!-- row -->
            </div>
            @endif
        </div>
        <div class="actions clearfix">
            <ul role="menu" aria-label="Pagination">
                <li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li>

                
                <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li>

                @if ($currentstep == 1)
                    <button type="button" class="forward btn-primary" role="menuitem"
                        wire:click="increasestep()">{{ __('global.next_step') }}</button>
                        
                
                @endif
                @if ($currentstep == 2)
                    <button type="button" name="backward" class="backward"
                        wire:click="descreaseStep()">{{ __('global.previous_step') }}</button>
                    <button type="button" name="forward" class="forward"
                        wire:click="increasestep()">{{ __('global.next_step') }}</button>
                @endif
                @if ($currentstep == 3)
                    <button type="button" name="backward" class="backward"
                        wire:click="descreaseStep()">{{ __('global.previous_step') }}</button>
                    <button type="submit" name="forward" class="forward"
                        wire:click="increasestep()">{{ __('version.submit_data') }}</button>
                @endif
            </ul>
        </div>
    </div>
</div>
