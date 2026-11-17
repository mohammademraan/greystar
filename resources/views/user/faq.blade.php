@extends('user.layout.app-master')
@section('title', 'FAQ - Greystar')
@section('content')

<section class="page">
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>FAQ</h1>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="active">FAQ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-bottom pbottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="text-center mb-5">
                        <span class="badge px-3 py-2 rounded-pill mb-2" style="background: rgba(0, 119, 212, 0.1); color: #0077D4; font-weight: 700;">FREQUENTLY ASKED QUESTIONS</span>
                        <h2 style="font-family: var(--font-heading); font-weight: 800; color: #0A2245; font-size: 32px;">Help &amp; Knowledge Base</h2>
                        <p class="text-muted">Common questions about Greystar lot optimization, account management, and security.</p>
                    </div>
                    <div class="accordion d-flex flex-column gap-3" id="faqAccordion">
                        @foreach([
                            '1. How can I redeem or reset my account?' => 'To redeem or reset your account, ensure that all property tasks assigned to you are completed. Once completed, your balance is unlocked and eligible for immediate redemption.',
                            '2. Can I register multiple accounts with the same phone number?' => 'No, each telephone number and identity can only be associated with a single verified Greystar account to maintain security and integrity.',
                            '3. Can I bind the same wallet to another platform account?' => 'No, re-binding the same crypto wallet address to multiple user accounts is strictly prohibited by our risk-management policies.',
                            '4. How can I ensure the security of my account and redemption passwords?' => 'Always maintain confidentiality over your login and wallet passwords. Never share your security credentials with third parties.',
                            '5. Can I change or cancel a property lot package after accepting it?' => 'Once a lot package has been allocated and accepted, cancellation or abandonment is restricted to preserve inventory consistency.',
                            '6. What are the consequences of inappropriate use of the account?' => 'Any fraudulent activity or violation of Greystar Terms will lead to immediate account suspension and appropriate legal remedies.',
                            '7. Do I need to verify the deposit address before transferring funds?' => 'Yes, always confirm the designated deposit address through our official Customer Concierge before initiating any transfer.',
                            '8. Will Greystar be responsible for transfers to incorrect addresses?' => 'No, blockchain transfers are irreversible. Please double-check your network and wallet address prior to confirming transactions.',
                            '9. Can I accept data lots with a balance of less than $50?' => 'A minimum available balance of $50 is required to begin lot allocation. Minimum redemption is also $50.',
                            '10. What is the time limit to complete lot evaluations?' => 'Evaluations should typically be completed within 24 hours of assignment. If you require an extension, please contact support.',
                            '11. How can I contact customer support?' => 'You can reach our dedicated Greystar support team 24/7 via the live chat widget on our website or by emailing support@greystar.com.',
                            '12. What should I do if I forget my password?' => 'Navigate to the Security Center in your dashboard to reset your password, or reach out to Customer Concierge for recovery assistance.',
                            '13. Are there any fees for redeeming my account balance?' => 'Greystar does not charge platform redemption fees; standard blockchain network gas fees apply depending on the chosen currency.',
                            '14. Can I update my personal information after registration?' => 'Yes, you can manage your personal details and view verification status in the Profile section.',
                            '15. What happens if I encounter delays completing a task?' => 'If unexpected delays occur, notify our customer support team so our automated queue system can preserve your account standing.',
                            '16. Is my personal information secure with Greystar?' => 'Yes, Greystar employs industry-standard 256-bit SSL encryption and strict data-privacy protocols to safeguard your personal information.',
                            '17. Can I transfer my account balance directly to another user?' => 'Internal user-to-user transfers are not supported. All funds must be redeemed to your personal verified wallet.',
                            '18. What is the minimum amount required to add funds?' => 'The standard minimum deposit is $50. Always confirm the current receiving address before transferring.',
                            '19. How can I view my complete transaction history?' => 'You can review all historical deposits, lot commissions, and redemptions directly in the Records and Recharge History tabs.',
                            '20. What should I do if I encounter a technical issue?' => 'If you experience any platform difficulty, click the Live Chat button at the bottom-right corner for immediate concierge support.'
                        ] as $question => $answer)
                            <div class="accordion-item border-0 shadow-sm" style="border-radius: 16px; background: #ffffff; border: 1px solid rgba(10, 34, 69, 0.08) !important; overflow: hidden;">
                                <h2 class="accordion-header" id="heading{{ $loop->index }}">
                                    <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $loop->index }}" style="font-family: var(--font-heading); font-weight: 700; color: #0A2245; font-size: 15px; padding: 18px 24px; background: #ffffff;">
                                        {{ $question }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body px-4 pb-4 pt-1" style="color: #475569; font-size: 15px; line-height: 1.7; border-top: 1px solid rgba(10, 34, 69, 0.05);">
                                        {{ $answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
