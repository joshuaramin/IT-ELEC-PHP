<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-color: #D4BA50;">
    <div>
        {{ $logo }}
    </div>

    <div class="" 
    style="width: 15in;
    max-width: 45rem;
    height: 410px;
    margin-top: 1.5rem; 
    padding-left: 1.5rem; 
    padding-right: 1.5rem;
    padding-top: 1rem;
    padding-bottom: 1rem; 
    background-color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
    overflow: hidden; 
    border-radius: 0.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;">
        {{ $slot }}
    </div>
</div>
