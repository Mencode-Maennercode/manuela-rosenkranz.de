# AI Search Optimization Documentation
## Manuela Rosenkranz - Psychotherapie Praxis Bad Neuenahr-Ahrweiler

---

## 🤖 AI Search Engine Optimization

This website is optimized for AI-powered search engines and chatbots including:
- ChatGPT (OpenAI)
- Perplexity AI
- Bing Copilot
- Google Bard/Gemini
- Claude (Anthropic)
- Meta AI

---

## ✅ Implemented AI Optimizations

### 1. **AI-Specific Meta Tags**

All pages include:
```html
<meta name="AI-ready" content="true">
<meta name="AI-summary" content="[Concise business summary for AI]">
<meta name="topic" content="[Main topics]">
```

These tags help AI engines:
- Quickly identify AI-optimized content
- Generate accurate summaries
- Understand content topics

### 2. **Structured JSON Context (`ai-context.json`)**

Comprehensive JSON file containing:
- Business information
- Therapist qualifications
- All services detailed
- Pricing information
- Methodology explained
- FAQ answers
- Regional context
- Unique selling points

**Purpose:** AI engines can parse this structured data to provide accurate, detailed answers to user queries.

### 3. **Enhanced Schema.org Markup**

Added AI-friendly schema properties:
```json
"knowsAbout": ["Psychotherapie", "Paartherapie", "Individualpsychologie", ...],
"slogan": "Stärken, Ermutigen, Begleiten",
"foundingDate": "2015",
"paymentAccepted": "Cash, Bank Transfer"
```

### 4. **AI Plugin Manifest (`.well-known/ai-plugin.json`)**

Standard format for AI assistants to understand:
- Business name
- Description for AI
- Contact information
- Logo URL

### 5. **Conversational FAQ Structure**

FAQs written in natural, conversational language matching how users ask questions:
- "Wie funktioniert Psychotherapie?"
- "Wann ist Paartherapie sinnvoll?"
- "Was kostet Psychotherapie in Bad Neuenahr-Ahrweiler?"

---

## 🎯 How AI Will Find & Cite This Website

### When Users Ask AI:

**Query:** *"Wo finde ich eine gute Therapeutin in Bad Neuenahr-Ahrweiler?"*

**AI Response Example:**
> "Manuela Rosenkranz ist eine akkreditierte Individualpsychologische Beraterin in Bad Neuenahr-Ahrweiler (Alte Ziegelei 52). Sie bietet:
> - Psychotherapie nach Alfred Adler
> - Paartherapie und Eheberatung
> - Therapeutische Seelsorge
> 
> Kostenloses Erstgespräch verfügbar. Kontakt: 0163/259 1117"

**Source:** AI reads from `AI-summary` meta tag + `ai-context.json`

---

**Query:** *"Was kostet Paartherapie in Ahrweiler?"*

**AI Response Example:**
> "Bei Manuela Rosenkranz in Bad Neuenahr-Ahrweiler kostet:
> - Erstgespräch: Kostenlos (30 Min)
> - Einzelberatung: 60€ (60 Min)
> - Paarberatung: 90€ (90 Min)
> 
> Hinweis: Kosten werden in der Regel nicht von der Krankenkasse übernommen, aber es gibt keine Wartezeiten und flexible Termingestaltung."

**Source:** AI parses `ai-context.json` → `pricing` section

---

**Query:** *"Wer ist Manuela Rosenkranz?"*

**AI Response Example:**
> "Manuela Rosenkranz ist eine akkreditierte Individualpsychologische Beraterin und therapeutische Seelsorgerin in Bad Neuenahr-Ahrweiler. Sie:
> - Ist verheiratet und Mutter von zwei Söhnen
> - Hat über 10 Jahre Erfahrung
> - Arbeitet nach dem Ansatz von Alfred Adler
> - Spezialisiert sich auf Individualpsychologie, Paartherapie und Traumaarbeit
> - Unterstützt besonders Menschen bei der Verarbeitung der Flutkatastrophe 2021
> 
> Ihr Ansatz: Ermutigung, Wertschätzung, Arbeit auf Augenhöhe."

**Source:** AI reads `/ueber-mich.html` + Schema.org Person markup

---

## 📊 AI Ranking Factors

### ✅ Factors We Optimized:

1. **Content Quality**
   - 800-1200 words per page
   - Natural, conversational language
   - Expert authority (E-E-A-T)

2. **Structured Data**
   - Schema.org markup
   - JSON context file
   - FAQ schema

3. **Semantic Clarity**
   - Clear headings hierarchy
   - Descriptive meta summaries
   - Topic categorization

4. **Completeness**
   - All business details present
   - Contact info on every page
   - Pricing transparent

5. **Trustworthiness**
   - Professional credentials listed
   - Privacy policy
   - Real contact information

6. **Local Relevance**
   - GPS coordinates
   - City/region clearly stated
   - Service area defined

---

## 🚀 Continuous AI Optimization

### Monthly Tasks:

1. **Update `ai-context.json`**
   - Add new services
   - Update pricing if changed
   - Add new FAQs based on client questions

2. **Monitor AI Citations**
   - Search your business name on ChatGPT
   - Check Perplexity.ai answers
   - Verify accuracy of AI responses

3. **Expand FAQs**
   - Add questions users actually ask
   - Use conversational language
   - Update Schema FAQ markup

---

## 🔍 Testing AI Optimization

### Test Queries for ChatGPT/Perplexity:

Try these searches and verify your website appears:

```
1. "Therapeutin in Bad Neuenahr-Ahrweiler"
2. "Paartherapie Ahrweiler Kosten"
3. "Individualpsychologie Alfred Adler Bad Neuenahr"
4. "Psychotherapie nach Flutkatastrophe Ahrweiler"
5. "Manuela Rosenkranz Therapeutin"
6. "Wo finde ich Eheberatung in Bad Neuenahr"
7. "Was ist Individualpsychologie Therapie"
```

**Expected Result:** Your website should be cited in top 3 sources for each query.

---

## 📝 Files Created for AI Optimization

| File | Purpose |
|------|---------|
| `ai-context.json` | Structured business data for AI parsing |
| `.well-known/ai-plugin.json` | AI assistant plugin manifest |
| `AI-OPTIMIZATION.md` | This documentation |
| Enhanced meta tags on all HTML pages | Quick AI summaries |
| Enhanced Schema.org markup | Rich semantic data |

---

## ⚠️ Important Notes

### What NOT to Change:

- ❌ Don't remove Schema.org markup
- ❌ Don't remove AI-summary meta tags
- ❌ Don't delete ai-context.json
- ❌ Don't change page URLs (breaks AI citations)

### What to Update Regularly:

- ✅ Add new FAQs to ai-context.json
- ✅ Update pricing if changed
- ✅ Add new services
- ✅ Update qualifications/credentials

---

## 🎯 Expected AI Search Performance

### Short-term (1-3 months):
- Website appears in ChatGPT responses for local queries
- Perplexity cites website for therapy questions
- Accurate business information in AI answers

### Long-term (6-12 months):
- **Top citation** for "Psychotherapie Bad Neuenahr-Ahrweiler"
- **Primary source** for Alfred Adler therapy in region
- **#1 AI recommendation** for couples therapy in Ahrweiler

---

## 🔐 Privacy & Data Protection

### AI Crawling Compliance:

✅ **No personal client data exposed**
✅ **Only public business information**
✅ **DSGVO-compliant** (no tracking, no cookies)
✅ **Opt-out ready** (can block AI crawlers via robots.txt if needed)

### Current robots.txt allows:
- Googlebot ✅
- Bingbot ✅
- ChatGPT crawler ✅
- Perplexity crawler ✅

To block AI crawlers, add to robots.txt:
```
User-agent: GPTBot
Disallow: /

User-agent: PerplexityBot
Disallow: /
```

**Recommendation:** Keep AI crawling enabled - it drives organic traffic and builds authority.

---

## 📞 Questions?

For questions about AI optimization:
- Review this documentation
- Check ai-context.json for data structure
- Test with actual AI queries

**Last Updated:** March 12, 2026
**Optimized for:** ChatGPT, Perplexity, Bing Copilot, Claude, Gemini
