<div class="table-responsive">
    <table class="table table-head-custom table-vertical-center table-head-bg table-borderless">
        <thead>
            <tr class="text-left">
                <th style="min-width: 200px" class="pl-7"><span class="text-dark-75">Name/Description</span></th>
                <th style="min-width: 120px">Amount</th>
                <th style="min-width: 120px">Paid</th>
                <th style="min-width: 120px">Remaining</th>
                <th style="min-width: 120px">Due Date</th>
                <th style="min-width: 100px">Status</th>
                <th style="min-width: 120px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
                <tr>
                    <td class="pl-0 py-8">
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-50 symbol-light mr-4">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary">
                                        <!-- User Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                </span>
                            </div>
                            <div>
                                <a href="#"
                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $item->name }}</a>
                                <span class="text-muted font-weight-bold d-block">{{ $item->description ?? '-' }}</span>
                            </div>
                        </div>
                    </td>
                    <td><span
                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $item->formatted_amount }}</span>
                    </td>
                    <td><span
                            class="text-success font-weight-bolder d-block font-size-lg">{{ $item->formatted_paid_amount }}</span>
                    </td>
                    <td><span
                            class="text-danger font-weight-bolder d-block font-size-lg">{{ $item->formatted_remaining_amount }}</span>
                    </td>
                    <td>
                        <span
                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $item->due_date ? $item->due_date->format('d M Y') : '-' }}</span>
                    </td>
                    <td>
                        @if ($item->status == 'paid')
                            <span class="label label-lg label-light-success label-inline">Paid</span>
                        @else
                            <span class="label label-lg label-light-warning label-inline">Unpaid</span>
                        @endif
                    </td>
                    <td class="pr-0">
                        @if ($item->status != 'paid')
                            <button type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"
                                data-toggle="modal" data-target="#paymentModal" data-id="{{ $item->id }}"
                                data-amount="{{ $item->remaining_amount }}" data-type="{{ $type }}"
                                title="Pay">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                    <!-- Money Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,14 C12.8807119,14 14,12.8807119 14,11.5 C14,10.1192881 12.8807119,9 11.5,9 C10.1192881,9 9,10.1192881 9,11.5 C9,12.8807119 10.1192881,14 11.5,14 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M11.5,14 C12.8807119,14 14,12.8807119 14,11.5 C14,10.1192881 12.8807119,9 11.5,9 C10.1192881,9 9,10.1192881 9,11.5 C9,12.8807119 10.1192881,14 11.5,14 Z M15.5,13 L17,13 C17.5522847,13 18,13.4477153 18,14 L18,16 C18,16.5522847 17.5522847,17 17,17 L15.5,17 C14.9477153,17 14.5,16.5522847 14.5,16 L14.5,14 C14.5,13.4477153 14.9477153,13 15.5,13 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                </span>
                            </button>
                        @endif
                        <a href="{{ route('debts.edit', $item) }}"
                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3" title="Edit">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!-- Edit Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17633517 8.44974759,4.89217169 L10.3653899,2.99978033 C10.7321856,2.63738739 11.3102522,2.63738739 11.6770479,2.99978033 L13.5926903,4.89217169 C13.8803235,5.17633517 14.0424379,5.56391781 14.0424379,5.96685884 L14.0424379,17.9148182 C14.0424379,18.514838 13.5560117,19 12.9560312,19 L9.08640671,19 C8.48642622,19 8,18.514838 8,17.9148182 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(11.021219, 10.500000) scale(1, -1) rotate(45.000000) translate(-11.021219, -10.500000) " />
                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2"
                                            rx="1" />
                                    </g>
                                </svg>
                            </span>
                        </a>
                        <form action="{{ route('debts.destroy', $item) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Delete this record? This action cannot be undone.');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-icon btn-light btn-hover-danger btn-sm"
                                title="Delete">
                                <span class="svg-icon svg-icon-md svg-icon-danger">
                                    <!-- Delete Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <path
                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center text-muted py-5">
                        No records found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
