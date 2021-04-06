<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>{{ $contact[0]->mainTitle }}</h2>
                </div>
                <p>{{ $contact[0]->mainText }}</p>
                <h3 class="mt60">{{ $contact[0]->streetTitle }}</h3>
                <p class="con-item">{{ $contact[0]->street }}</p>
                <p class="con-item">{{ $contact[0]->phone }}</p>
                <p class="con-item">{{ $contact[0]->mail }}/p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                @if (session('stopMail'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('stopMail') }}
                    </div>
                @endif
                <form action="email" method="POST" class="form-class" id="con_form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                            @if (session('name'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="mail" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <select name="subject_id" id="">
                                @foreach ($subject as $item)
                                    <option value="{{ $item->id }}">{{ $item->subject }}</option>
                                @endforeach
                            </select>
                            <textarea name="content" placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->
