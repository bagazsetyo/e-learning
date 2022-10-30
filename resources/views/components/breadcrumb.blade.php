<div>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                @php
                    $keys_array = array_keys($breadcrumb);
                    $last_array_key = end($keys_array);
                @endphp
                <h3>
                    {{ $last_array_key }}
                </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        @foreach ($breadcrumb as $index => $value)
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ $value }}">
                                {{ $index }}
                            </a>
                        </li>
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>