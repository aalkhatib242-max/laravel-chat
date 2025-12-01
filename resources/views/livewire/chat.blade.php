<div wire:poll>

    <div>
    <div wire:poll.keep-alive>

        <div class="bg-red-500 text-white p-4">
    نسخة تجريبية اخواتي (beta)
</div>

    <div id="chat-box" class="space-y-2 mb-4" >
        @foreach ($mm as $msg)
            <div class="p-2 rounded bg-gray-700 text-white">
                @if ($msg->user->name==auth()->user()->name)
                    <div  class="flex justify-end"> 
                        <div style="background-color: blue;(0, 255, 255, 0.801); width:max-content; border-radius: 10px; padding: 10px;" >{{ $msg->user->name }}
                        <h1 style="color:white">{{ $msg->message }}</h1><div class="text-xs text-gray-300">
                    {{ $msg->created_at->diffForHumans() }}
                </div></div>
                        
                    </div>
                @else
                    <div style="background-color: red; border-radius:10px ; padding: 10px; width: fit-content; align-items: end;  " >
                        <div >{{ $msg->user->name }}
                        <h1>{{ $msg->message }}</h1>
                        
                    {{ $msg->created_at->diffForHumans() }}
                </div>
                    </div>
                @endif 
                
            </div>
        @endforeach
        
    </div>
    <div id="chat_box" class="overflow-y-scroll h-[400px]">
</div>

<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('messageSent', () => {
            let chatbox = document.getElementById('chat_box');
            chatbox.scrollTop = chatbox.scrollHeight;
        });
    });
</script>

    <div class="p-4 bg-[#0d1117] border-t border-gray-700">
        <form wire:submit.prevent="send" class="flex items-center gap-3">

            <input 
                type="text" 
                wire:model="message"
                placeholder="اكتب رسالة..."
                class="flex-1 px-4 py-3 bg-[#161b22] text-gray-100 placeholder-gray-500
                    border border-gray-600 rounded-xl focus:outline-none focus:ring-2 
                    focus:ring-blue-500"
                    style="color:white; background-color: black; border-radius: 10px; padding: 10px; width:min-content;"
            >

            <button 
                class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl"
                style="background-color:black; color: white; border-radius: 10px; padding: 10px;">
                إرسال
            </button>

        </form>
    </div>


</div>
</div>

</div>
