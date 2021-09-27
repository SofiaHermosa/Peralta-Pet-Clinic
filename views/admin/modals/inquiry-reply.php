<div class="w-full z-1 h-screen fixed top-0 left-0 frosted hidden" id="replyInquiryModal">
    <div class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 margin-auto w-1/2 bg-white rounded-lg shadow-lg p-10">
        <div class="w-full py-2 text-2xl text-gray-700 font-bold mb-6">
            <h1>Reply to inquiry</h1>
        </div>

        <button type="button" class="absolute right-0 top-0 transform -translate-y-6 translate-x-6 bg-white rounded-full p-2 mx-2 inline-flex items-center justify-center text-gray-800 font-bolder shadow-xl hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 toggle-menu" data-toggle="#replyInquiryModal" data-modal="true">
            <span class="sr-only">Close main menu</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6 stroke-width-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <form method="POST" id="formRepInquiry" action="/reply/inquiry" enctype='multipart/form-data'>
        <input type="hidden" name="inq_name">
        <input type="hidden" name="inq_id">
        <div class="grid grid-cols-5 gap-4">
            <div class="col-span-2">
                <label class="form_label">Recepient</label>
                <input type="text" class="form_input" name="inq_email">
            </div>
            <div class="col-span-3">
                <label class="form_label">Subject</label>
                <input type="text" class="form_input" name="inq_subject">
            </div>
            <div class="col-span-5">
                <label class="form_label">Body</label>
                <textarea class="form_input" name="reply_content" rows="10">
                </textarea>
            </div>
        </div>
        <div class="w-full py-4">
            <button type="button" class="sendReplyBtn text-indigo-600 float-right font-bold rounded py-2 px-4 bg-indigo-200 hover:text-indigo-900 hover:bg-indigo-200">Send</button>
        </div>
        </form>
    </div>
</div>