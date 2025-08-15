@extends('dashboard.layouts.app', ['themeplugins' => null])

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="alert alert-info d-flex align-items-center" role="alert" style="font-size: 1.2rem; background-color: #e0f7fa; color: #00796b; border-radius: 10px; padding: 20px;">
                <div style="margin-right: 15px;">
                    <i class="fa fa-rocket" style="font-size: 2rem;"></i>
                </div>
                <div>
                    <h4 class="alert-heading" style="font-size: 1.5rem; margin-bottom: 10px;">🚀 Welcome to the Beta Version of Lead CRM</h4>
                    <p style="margin: 0;">We are excited to introduce you to the Lead CRM, now an integral part of the {{ env("APP_NAME") }} system. This powerful tool is designed to help you manage your leads more efficiently and streamline your sales process.</p>



                    <h5 style="margin-top: 15px; font-size: 1.3rem;">🔍 What to Expect</h5>
                    <p style="margin: 0;">As this is the beta version, you might encounter some features that are still being fine-tuned. We're continuously working to improve the system, and your feedback plays a crucial role in this process. If you notice any issues or have suggestions, please don't hesitate to share them with us.</p>

                    <h5 style="margin-top: 15px; font-size: 1.3rem;">💬 Share Your Feedback</h5>
                    <p style="margin: 0;">We value your insights and encourage you to provide feedback through our dedicated feedback channel. Your input will directly contribute to the enhancements we make in the final version.</p>

                    <p style="margin-top: 10px;"><strong>Thank you for being part of this journey with {{ env("APP_NAME") }} and helping us create a better experience for everyone!</strong></p>
                </div>
            </div>
        </div>
    </div>
@endsection

