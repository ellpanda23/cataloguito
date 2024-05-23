<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($socials as $social)
                    <tr>
                        <td>
                            <i class="{{ $social->icon }}"></i>
                            {{ $social->platform }}
                        </td>
                        @if ($social->username)
                            <td>

                                @switch($social->platform)
                                    @case('Facebook')
                                        <a href="https://facebook.com/{{$social->username}}/" target="_blank">{{'@'.$social->username}}</a>
                                    @break
                                    @case('Instagram')
                                    <a href="https://instagram.com/{{$social->username}}/" target="_blank">{{'@'.$social->username}}</a>
                                    @break
                                    @case('WhatsApp')
                                        <a href="https://api.whatsapp.com/send?phone=52{{$social->username}}" target="_blank">{{$social->username}}</a>
                                    @break
                                    @default

                                @endswitch

                            </td>
                        @else
                            <td>Todavía no añades {{$social->platform}}</td>
                        @endif
                        <td class="float-right">
                            @livewire('admin.socials.add-username', ['social' => $social],
                            key('admin.socials.add-username-'.$social->id))
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
