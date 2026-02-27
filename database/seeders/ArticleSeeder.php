<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Understanding Corporate Law: A Comprehensive Guide for Businesses',
                'category' => 'Article',
                'description' => '<p>Corporate law governs how corporations are formed, operated, and dissolved. It encompasses a wide range of legal principles that affect businesses of all sizes. Understanding the fundamentals of corporate law is essential for any business owner or executive seeking to protect their company and ensure compliance with applicable regulations.</p><p>From formation documents to shareholder agreements, corporate law provides the framework within which businesses operate. Proper legal structure can protect personal assets, minimize tax liability, and facilitate investment.</p><p>Our legal team specializes in helping businesses navigate the complex landscape of corporate law, ensuring that your organization is structured for success from the ground up.</p>',
                'tags' => 'corporate law, business, legal compliance, shareholders',
                'publish_date' => '2024-01-15',
                'status' => 'published',
                'author' => 'Admin'
            ],
            [
                'title' => 'New Regulations on Contract Enforcement Take Effect This Quarter',
                'category' => 'News',
                'description' => '<p>The regulatory landscape for contract enforcement has seen significant changes this quarter, with new provisions affecting how businesses handle disputes and breach of contract claims. These updates represent a major shift in how courts will interpret contractual obligations.</p><p>Key changes include stricter requirements for written documentation, enhanced protections for small businesses in commercial contracts, and new mediation requirements before litigation can proceed.</p><p>Our firm has been closely monitoring these developments and is prepared to help clients adapt their existing contracts and business practices to comply with the new requirements.</p>',
                'tags' => 'contract law, regulations, enforcement, legal news',
                'publish_date' => '2024-01-20',
                'status' => 'published',
                'author' => 'Admin'
            ],
            [
                'title' => 'Intellectual Property Protection Strategies for Startups',
                'category' => 'Article',
                'description' => '<p>For startups, intellectual property (IP) is often the most valuable asset a company possesses. From trademarks and patents to trade secrets and copyrights, protecting your IP is critical to maintaining a competitive advantage in the marketplace.</p><p>Many early-stage companies make the mistake of delaying IP protection until after they have launched their product or service. This can be a costly error, as competitors may be able to capitalize on unprotected innovations.</p><p>Our intellectual property attorneys work with startups from the earliest stages to identify, protect, and leverage their most valuable IP assets, creating a foundation for long-term growth and success.</p>',
                'tags' => 'intellectual property, startups, patents, trademarks',
                'publish_date' => '2024-01-10',
                'status' => 'published',
                'author' => 'Admin'
            ],
            [
                'title' => 'Supreme Court Rules on Landmark Employment Law Case',
                'category' => 'News',
                'description' => '<p>In a landmark decision that will affect employers across the country, the Supreme Court has issued a ruling that significantly changes how companies must handle employee classification and benefits. The decision has far-reaching implications for businesses that rely on independent contractors.</p><p>The ruling clarifies the distinction between employees and independent contractors, setting new standards that courts and regulatory agencies will use in future determinations. Employers who misclassify workers could face significant penalties.</p><p>We urge all businesses to review their workforce classifications in light of this decision and consult with employment law counsel to ensure compliance.</p>',
                'tags' => 'employment law, Supreme Court, worker classification, compliance',
                'publish_date' => '2024-01-18',
                'status' => 'published',
                'author' => 'Admin'
            ],
            [
                'title' => 'Estate Planning Essentials: Protecting Your Legacy',
                'category' => 'Article',
                'description' => '<p>Estate planning is one of the most important steps individuals and families can take to protect their assets and ensure their wishes are carried out after death. Despite its importance, many people delay this critical process, leaving their loved ones vulnerable.</p><p>A comprehensive estate plan typically includes a will, powers of attorney, healthcare directives, and potentially trusts designed to minimize estate taxes and facilitate the smooth transfer of assets. The specific components of your plan will depend on your unique circumstances, goals, and the size of your estate.</p><p>Our estate planning attorneys take a personalized approach to help clients create plans that reflect their values and protect the people they love most.</p>',
                'tags' => 'estate planning, wills, trusts, family law',
                'publish_date' => '2023-12-28',
                'status' => 'published',
                'author' => 'Admin'
            ],
            [
                'title' => 'New Data Privacy Law Impacts Businesses Handling Consumer Data',
                'category' => 'News',
                'description' => '<p>A sweeping new data privacy legislation has been enacted that will require significant changes to how businesses collect, store, and use consumer data. The law, which takes effect in the coming months, introduces strict requirements for data transparency, consent, and breach notification.</p><p>Under the new law, businesses must provide clear disclosures about data collection practices, obtain explicit consent for certain types of data processing, and implement robust security measures to protect consumer information. Violations can result in substantial fines.</p><p>Our data privacy practice group is helping clients assess their current data practices and develop compliance roadmaps to meet the new requirements before the effective date.</p>',
                'tags' => 'data privacy, compliance, consumer protection, regulation',
                'publish_date' => '2024-01-05',
                'status' => 'published',
                'author' => 'Admin'
            ],
            [
                'title' => 'Mergers & Acquisitions: Due Diligence Best Practices',
                'category' => 'Article',
                'description' => '<p>Due diligence is a critical phase in any merger or acquisition transaction. It involves a comprehensive review of the target company across legal, financial, operational, and strategic dimensions. Thorough due diligence can uncover hidden liabilities, identify integration challenges, and ultimately determine whether a deal is worth pursuing.</p><p>Legal due diligence focuses on reviewing corporate records, material contracts, intellectual property, employment matters, regulatory compliance, pending litigation, and real estate holdings. Each area can reveal risks that may affect deal pricing or structure.</p><p>Our M&A team has extensive experience conducting due diligence on transactions of all sizes, helping clients make informed decisions and structure deals that minimize risk and maximize value.</p>',
                'tags' => 'mergers acquisitions, due diligence, corporate law, transactions',
                'publish_date' => '2023-12-15',
                'status' => 'published',
                'author' => 'Admin'
            ],
            [
                'title' => 'Real Estate Law Update: Changes to Property Transaction Requirements',
                'category' => 'News',
                'description' => '<p>Recent legislative changes have introduced new requirements for real estate transactions that both buyers and sellers need to be aware of. The updates affect disclosure requirements, closing procedures, and financing arrangements for residential and commercial properties.</p><p>Among the most significant changes is the enhanced disclosure requirement that mandates sellers to provide more detailed information about the property\'s history, including environmental conditions, structural issues, and any pending legal disputes. Failure to comply can result in transaction delays or legal liability.</p><p>Our real estate attorneys are well-versed in the new requirements and are available to guide clients through compliant property transactions.</p>',
                'tags' => 'real estate, property law, transactions, legal update',
                'publish_date' => '2023-12-20',
                'status' => 'published',
                'author' => 'Admin'
            ],
            [
                'title' => 'Navigating Business Dispute Resolution: Litigation vs. Arbitration',
                'category' => 'Article',
                'description' => '<p>When business disputes arise, companies face an important choice: pursue resolution through traditional litigation in court or through alternative dispute resolution mechanisms such as arbitration or mediation. Each approach has its own advantages and drawbacks that must be carefully weighed.</p><p>Litigation offers the full procedural protections of the court system, including discovery rights and the ability to appeal adverse decisions. However, it can be time-consuming and expensive, and court proceedings are generally public record.</p><p>Arbitration, on the other hand, is typically faster, more private, and can be less expensive than full litigation. Our dispute resolution attorneys help clients evaluate which approach best serves their interests given the specific facts and circumstances of each dispute.</p>',
                'tags' => 'dispute resolution, litigation, arbitration, business law',
                'publish_date' => '2023-11-30',
                'status' => 'published',
                'author' => 'Admin'
            ],
            [
                'title' => 'Tax Law Amendment Offers New Opportunities for Business Owners',
                'category' => 'News',
                'description' => '<p>Recent amendments to the tax code have created new planning opportunities for business owners and entrepreneurs. The changes, effective for the current tax year, include enhanced deductions for small businesses, modified treatment of capital gains, and new provisions affecting business succession planning.</p><p>Business owners who act quickly may be able to take advantage of transitional provisions that provide favorable tax treatment during the phase-in period. Proper planning now could result in significant tax savings over the coming years.</p><p>Our tax law practice works closely with business owners to identify and implement strategies that minimize tax liability while ensuring full compliance with applicable law.</p>',
                'tags' => 'tax law, business owners, tax planning, amendments',
                'publish_date' => '2024-01-08',
                'status' => 'published',
                'author' => 'Admin'
            ]
        ];

        foreach ($articles as $article) {
            $slug = \Illuminate\Support\Str::slug($article['title']) . '-' . rand(1000, 9999);
            Article::create(array_merge($article, ['slug' => $slug]));
        }
    }
}