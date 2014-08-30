<?php # vim:ft=php
include 'jlex.php';


class Yylex extends JLexBase  {
	const YY_BUFFER_SIZE = 512;
	const YY_F = -1;
	const YY_NO_STATE = -1;
	const YY_NOT_ACCEPT = 0;
	const YY_START = 1;
	const YY_END = 2;
	const YY_NO_ANCHOR = 4;
	const YY_BOL = 128;
	var $YY_EOF = 129;

//<YYINITIAL> L? \" (\\.|[^\\\"])* \"	{ $this->createToken(CParser::TK_STRING_LITERAL); }
	/* blah */
	protected $yy_count_chars = true;
	protected $yy_count_lines = true;

	function __construct($stream) {
		parent::__construct($stream);
		$this->yy_lexical_state = self::YYINITIAL;
	}

	const HAVE_UNIT = 6;
	const A = 2;
	const NUMERATOR = 3;
	const YYINITIAL = 0;
	const HAVE_INGREDIENT = 7;
	const HAVE_AMOUNT = 5;
	const DENOMINATOR = 4;
	const COMMENTS = 1;
	static $yy_state_dtrans = array(
		0,
		321,
		322,
		438,
		531,
		532,
		623,
		630
	);
	static $yy_acpt = array(
		/* 0 */ self::YY_NOT_ACCEPT,
		/* 1 */ self::YY_NO_ANCHOR,
		/* 2 */ self::YY_NO_ANCHOR,
		/* 3 */ self::YY_NO_ANCHOR,
		/* 4 */ self::YY_NO_ANCHOR,
		/* 5 */ self::YY_NO_ANCHOR,
		/* 6 */ self::YY_NO_ANCHOR,
		/* 7 */ self::YY_NO_ANCHOR,
		/* 8 */ self::YY_NO_ANCHOR,
		/* 9 */ self::YY_NO_ANCHOR,
		/* 10 */ self::YY_NO_ANCHOR,
		/* 11 */ self::YY_NO_ANCHOR,
		/* 12 */ self::YY_NO_ANCHOR,
		/* 13 */ self::YY_NO_ANCHOR,
		/* 14 */ self::YY_NO_ANCHOR,
		/* 15 */ self::YY_NO_ANCHOR,
		/* 16 */ self::YY_NO_ANCHOR,
		/* 17 */ self::YY_NO_ANCHOR,
		/* 18 */ self::YY_NO_ANCHOR,
		/* 19 */ self::YY_NO_ANCHOR,
		/* 20 */ self::YY_NO_ANCHOR,
		/* 21 */ self::YY_NO_ANCHOR,
		/* 22 */ self::YY_NO_ANCHOR,
		/* 23 */ self::YY_NO_ANCHOR,
		/* 24 */ self::YY_NO_ANCHOR,
		/* 25 */ self::YY_NO_ANCHOR,
		/* 26 */ self::YY_NO_ANCHOR,
		/* 27 */ self::YY_NO_ANCHOR,
		/* 28 */ self::YY_NO_ANCHOR,
		/* 29 */ self::YY_NO_ANCHOR,
		/* 30 */ self::YY_NO_ANCHOR,
		/* 31 */ self::YY_NO_ANCHOR,
		/* 32 */ self::YY_NO_ANCHOR,
		/* 33 */ self::YY_NO_ANCHOR,
		/* 34 */ self::YY_NO_ANCHOR,
		/* 35 */ self::YY_NO_ANCHOR,
		/* 36 */ self::YY_NO_ANCHOR,
		/* 37 */ self::YY_NO_ANCHOR,
		/* 38 */ self::YY_NO_ANCHOR,
		/* 39 */ self::YY_NO_ANCHOR,
		/* 40 */ self::YY_NO_ANCHOR,
		/* 41 */ self::YY_NO_ANCHOR,
		/* 42 */ self::YY_NO_ANCHOR,
		/* 43 */ self::YY_NO_ANCHOR,
		/* 44 */ self::YY_NO_ANCHOR,
		/* 45 */ self::YY_NO_ANCHOR,
		/* 46 */ self::YY_NO_ANCHOR,
		/* 47 */ self::YY_NO_ANCHOR,
		/* 48 */ self::YY_NO_ANCHOR,
		/* 49 */ self::YY_NO_ANCHOR,
		/* 50 */ self::YY_NO_ANCHOR,
		/* 51 */ self::YY_NO_ANCHOR,
		/* 52 */ self::YY_NO_ANCHOR,
		/* 53 */ self::YY_NO_ANCHOR,
		/* 54 */ self::YY_NO_ANCHOR,
		/* 55 */ self::YY_NO_ANCHOR,
		/* 56 */ self::YY_NO_ANCHOR,
		/* 57 */ self::YY_NO_ANCHOR,
		/* 58 */ self::YY_NO_ANCHOR,
		/* 59 */ self::YY_NO_ANCHOR,
		/* 60 */ self::YY_NO_ANCHOR,
		/* 61 */ self::YY_NO_ANCHOR,
		/* 62 */ self::YY_NO_ANCHOR,
		/* 63 */ self::YY_NO_ANCHOR,
		/* 64 */ self::YY_NO_ANCHOR,
		/* 65 */ self::YY_NO_ANCHOR,
		/* 66 */ self::YY_NO_ANCHOR,
		/* 67 */ self::YY_NO_ANCHOR,
		/* 68 */ self::YY_NO_ANCHOR,
		/* 69 */ self::YY_NO_ANCHOR,
		/* 70 */ self::YY_NO_ANCHOR,
		/* 71 */ self::YY_NO_ANCHOR,
		/* 72 */ self::YY_NO_ANCHOR,
		/* 73 */ self::YY_NO_ANCHOR,
		/* 74 */ self::YY_NO_ANCHOR,
		/* 75 */ self::YY_NO_ANCHOR,
		/* 76 */ self::YY_NO_ANCHOR,
		/* 77 */ self::YY_NO_ANCHOR,
		/* 78 */ self::YY_NOT_ACCEPT,
		/* 79 */ self::YY_NO_ANCHOR,
		/* 80 */ self::YY_NO_ANCHOR,
		/* 81 */ self::YY_NO_ANCHOR,
		/* 82 */ self::YY_NO_ANCHOR,
		/* 83 */ self::YY_NO_ANCHOR,
		/* 84 */ self::YY_NO_ANCHOR,
		/* 85 */ self::YY_NO_ANCHOR,
		/* 86 */ self::YY_NO_ANCHOR,
		/* 87 */ self::YY_NO_ANCHOR,
		/* 88 */ self::YY_NO_ANCHOR,
		/* 89 */ self::YY_NO_ANCHOR,
		/* 90 */ self::YY_NO_ANCHOR,
		/* 91 */ self::YY_NO_ANCHOR,
		/* 92 */ self::YY_NO_ANCHOR,
		/* 93 */ self::YY_NO_ANCHOR,
		/* 94 */ self::YY_NO_ANCHOR,
		/* 95 */ self::YY_NO_ANCHOR,
		/* 96 */ self::YY_NO_ANCHOR,
		/* 97 */ self::YY_NO_ANCHOR,
		/* 98 */ self::YY_NO_ANCHOR,
		/* 99 */ self::YY_NO_ANCHOR,
		/* 100 */ self::YY_NO_ANCHOR,
		/* 101 */ self::YY_NO_ANCHOR,
		/* 102 */ self::YY_NO_ANCHOR,
		/* 103 */ self::YY_NO_ANCHOR,
		/* 104 */ self::YY_NOT_ACCEPT,
		/* 105 */ self::YY_NO_ANCHOR,
		/* 106 */ self::YY_NO_ANCHOR,
		/* 107 */ self::YY_NO_ANCHOR,
		/* 108 */ self::YY_NO_ANCHOR,
		/* 109 */ self::YY_NO_ANCHOR,
		/* 110 */ self::YY_NO_ANCHOR,
		/* 111 */ self::YY_NO_ANCHOR,
		/* 112 */ self::YY_NO_ANCHOR,
		/* 113 */ self::YY_NOT_ACCEPT,
		/* 114 */ self::YY_NO_ANCHOR,
		/* 115 */ self::YY_NO_ANCHOR,
		/* 116 */ self::YY_NO_ANCHOR,
		/* 117 */ self::YY_NO_ANCHOR,
		/* 118 */ self::YY_NOT_ACCEPT,
		/* 119 */ self::YY_NO_ANCHOR,
		/* 120 */ self::YY_NO_ANCHOR,
		/* 121 */ self::YY_NO_ANCHOR,
		/* 122 */ self::YY_NOT_ACCEPT,
		/* 123 */ self::YY_NO_ANCHOR,
		/* 124 */ self::YY_NO_ANCHOR,
		/* 125 */ self::YY_NO_ANCHOR,
		/* 126 */ self::YY_NOT_ACCEPT,
		/* 127 */ self::YY_NO_ANCHOR,
		/* 128 */ self::YY_NO_ANCHOR,
		/* 129 */ self::YY_NO_ANCHOR,
		/* 130 */ self::YY_NOT_ACCEPT,
		/* 131 */ self::YY_NO_ANCHOR,
		/* 132 */ self::YY_NO_ANCHOR,
		/* 133 */ self::YY_NO_ANCHOR,
		/* 134 */ self::YY_NOT_ACCEPT,
		/* 135 */ self::YY_NO_ANCHOR,
		/* 136 */ self::YY_NO_ANCHOR,
		/* 137 */ self::YY_NO_ANCHOR,
		/* 138 */ self::YY_NOT_ACCEPT,
		/* 139 */ self::YY_NO_ANCHOR,
		/* 140 */ self::YY_NO_ANCHOR,
		/* 141 */ self::YY_NO_ANCHOR,
		/* 142 */ self::YY_NOT_ACCEPT,
		/* 143 */ self::YY_NO_ANCHOR,
		/* 144 */ self::YY_NO_ANCHOR,
		/* 145 */ self::YY_NO_ANCHOR,
		/* 146 */ self::YY_NOT_ACCEPT,
		/* 147 */ self::YY_NO_ANCHOR,
		/* 148 */ self::YY_NO_ANCHOR,
		/* 149 */ self::YY_NO_ANCHOR,
		/* 150 */ self::YY_NOT_ACCEPT,
		/* 151 */ self::YY_NO_ANCHOR,
		/* 152 */ self::YY_NO_ANCHOR,
		/* 153 */ self::YY_NO_ANCHOR,
		/* 154 */ self::YY_NOT_ACCEPT,
		/* 155 */ self::YY_NO_ANCHOR,
		/* 156 */ self::YY_NO_ANCHOR,
		/* 157 */ self::YY_NOT_ACCEPT,
		/* 158 */ self::YY_NO_ANCHOR,
		/* 159 */ self::YY_NO_ANCHOR,
		/* 160 */ self::YY_NOT_ACCEPT,
		/* 161 */ self::YY_NO_ANCHOR,
		/* 162 */ self::YY_NO_ANCHOR,
		/* 163 */ self::YY_NOT_ACCEPT,
		/* 164 */ self::YY_NO_ANCHOR,
		/* 165 */ self::YY_NOT_ACCEPT,
		/* 166 */ self::YY_NO_ANCHOR,
		/* 167 */ self::YY_NOT_ACCEPT,
		/* 168 */ self::YY_NO_ANCHOR,
		/* 169 */ self::YY_NOT_ACCEPT,
		/* 170 */ self::YY_NO_ANCHOR,
		/* 171 */ self::YY_NOT_ACCEPT,
		/* 172 */ self::YY_NO_ANCHOR,
		/* 173 */ self::YY_NOT_ACCEPT,
		/* 174 */ self::YY_NOT_ACCEPT,
		/* 175 */ self::YY_NOT_ACCEPT,
		/* 176 */ self::YY_NOT_ACCEPT,
		/* 177 */ self::YY_NOT_ACCEPT,
		/* 178 */ self::YY_NOT_ACCEPT,
		/* 179 */ self::YY_NOT_ACCEPT,
		/* 180 */ self::YY_NOT_ACCEPT,
		/* 181 */ self::YY_NOT_ACCEPT,
		/* 182 */ self::YY_NOT_ACCEPT,
		/* 183 */ self::YY_NOT_ACCEPT,
		/* 184 */ self::YY_NOT_ACCEPT,
		/* 185 */ self::YY_NOT_ACCEPT,
		/* 186 */ self::YY_NOT_ACCEPT,
		/* 187 */ self::YY_NOT_ACCEPT,
		/* 188 */ self::YY_NOT_ACCEPT,
		/* 189 */ self::YY_NOT_ACCEPT,
		/* 190 */ self::YY_NOT_ACCEPT,
		/* 191 */ self::YY_NOT_ACCEPT,
		/* 192 */ self::YY_NOT_ACCEPT,
		/* 193 */ self::YY_NOT_ACCEPT,
		/* 194 */ self::YY_NOT_ACCEPT,
		/* 195 */ self::YY_NOT_ACCEPT,
		/* 196 */ self::YY_NOT_ACCEPT,
		/* 197 */ self::YY_NOT_ACCEPT,
		/* 198 */ self::YY_NOT_ACCEPT,
		/* 199 */ self::YY_NOT_ACCEPT,
		/* 200 */ self::YY_NOT_ACCEPT,
		/* 201 */ self::YY_NOT_ACCEPT,
		/* 202 */ self::YY_NOT_ACCEPT,
		/* 203 */ self::YY_NOT_ACCEPT,
		/* 204 */ self::YY_NOT_ACCEPT,
		/* 205 */ self::YY_NOT_ACCEPT,
		/* 206 */ self::YY_NOT_ACCEPT,
		/* 207 */ self::YY_NOT_ACCEPT,
		/* 208 */ self::YY_NOT_ACCEPT,
		/* 209 */ self::YY_NOT_ACCEPT,
		/* 210 */ self::YY_NOT_ACCEPT,
		/* 211 */ self::YY_NOT_ACCEPT,
		/* 212 */ self::YY_NOT_ACCEPT,
		/* 213 */ self::YY_NOT_ACCEPT,
		/* 214 */ self::YY_NOT_ACCEPT,
		/* 215 */ self::YY_NOT_ACCEPT,
		/* 216 */ self::YY_NOT_ACCEPT,
		/* 217 */ self::YY_NOT_ACCEPT,
		/* 218 */ self::YY_NOT_ACCEPT,
		/* 219 */ self::YY_NOT_ACCEPT,
		/* 220 */ self::YY_NOT_ACCEPT,
		/* 221 */ self::YY_NOT_ACCEPT,
		/* 222 */ self::YY_NOT_ACCEPT,
		/* 223 */ self::YY_NOT_ACCEPT,
		/* 224 */ self::YY_NOT_ACCEPT,
		/* 225 */ self::YY_NOT_ACCEPT,
		/* 226 */ self::YY_NOT_ACCEPT,
		/* 227 */ self::YY_NOT_ACCEPT,
		/* 228 */ self::YY_NOT_ACCEPT,
		/* 229 */ self::YY_NOT_ACCEPT,
		/* 230 */ self::YY_NOT_ACCEPT,
		/* 231 */ self::YY_NOT_ACCEPT,
		/* 232 */ self::YY_NOT_ACCEPT,
		/* 233 */ self::YY_NOT_ACCEPT,
		/* 234 */ self::YY_NOT_ACCEPT,
		/* 235 */ self::YY_NOT_ACCEPT,
		/* 236 */ self::YY_NOT_ACCEPT,
		/* 237 */ self::YY_NOT_ACCEPT,
		/* 238 */ self::YY_NOT_ACCEPT,
		/* 239 */ self::YY_NOT_ACCEPT,
		/* 240 */ self::YY_NOT_ACCEPT,
		/* 241 */ self::YY_NOT_ACCEPT,
		/* 242 */ self::YY_NOT_ACCEPT,
		/* 243 */ self::YY_NOT_ACCEPT,
		/* 244 */ self::YY_NOT_ACCEPT,
		/* 245 */ self::YY_NOT_ACCEPT,
		/* 246 */ self::YY_NOT_ACCEPT,
		/* 247 */ self::YY_NOT_ACCEPT,
		/* 248 */ self::YY_NOT_ACCEPT,
		/* 249 */ self::YY_NOT_ACCEPT,
		/* 250 */ self::YY_NOT_ACCEPT,
		/* 251 */ self::YY_NOT_ACCEPT,
		/* 252 */ self::YY_NOT_ACCEPT,
		/* 253 */ self::YY_NOT_ACCEPT,
		/* 254 */ self::YY_NOT_ACCEPT,
		/* 255 */ self::YY_NOT_ACCEPT,
		/* 256 */ self::YY_NOT_ACCEPT,
		/* 257 */ self::YY_NOT_ACCEPT,
		/* 258 */ self::YY_NOT_ACCEPT,
		/* 259 */ self::YY_NOT_ACCEPT,
		/* 260 */ self::YY_NOT_ACCEPT,
		/* 261 */ self::YY_NOT_ACCEPT,
		/* 262 */ self::YY_NOT_ACCEPT,
		/* 263 */ self::YY_NOT_ACCEPT,
		/* 264 */ self::YY_NOT_ACCEPT,
		/* 265 */ self::YY_NOT_ACCEPT,
		/* 266 */ self::YY_NOT_ACCEPT,
		/* 267 */ self::YY_NOT_ACCEPT,
		/* 268 */ self::YY_NOT_ACCEPT,
		/* 269 */ self::YY_NOT_ACCEPT,
		/* 270 */ self::YY_NOT_ACCEPT,
		/* 271 */ self::YY_NOT_ACCEPT,
		/* 272 */ self::YY_NOT_ACCEPT,
		/* 273 */ self::YY_NOT_ACCEPT,
		/* 274 */ self::YY_NOT_ACCEPT,
		/* 275 */ self::YY_NOT_ACCEPT,
		/* 276 */ self::YY_NOT_ACCEPT,
		/* 277 */ self::YY_NOT_ACCEPT,
		/* 278 */ self::YY_NOT_ACCEPT,
		/* 279 */ self::YY_NOT_ACCEPT,
		/* 280 */ self::YY_NOT_ACCEPT,
		/* 281 */ self::YY_NOT_ACCEPT,
		/* 282 */ self::YY_NOT_ACCEPT,
		/* 283 */ self::YY_NOT_ACCEPT,
		/* 284 */ self::YY_NOT_ACCEPT,
		/* 285 */ self::YY_NOT_ACCEPT,
		/* 286 */ self::YY_NOT_ACCEPT,
		/* 287 */ self::YY_NOT_ACCEPT,
		/* 288 */ self::YY_NOT_ACCEPT,
		/* 289 */ self::YY_NOT_ACCEPT,
		/* 290 */ self::YY_NOT_ACCEPT,
		/* 291 */ self::YY_NOT_ACCEPT,
		/* 292 */ self::YY_NOT_ACCEPT,
		/* 293 */ self::YY_NOT_ACCEPT,
		/* 294 */ self::YY_NOT_ACCEPT,
		/* 295 */ self::YY_NOT_ACCEPT,
		/* 296 */ self::YY_NOT_ACCEPT,
		/* 297 */ self::YY_NOT_ACCEPT,
		/* 298 */ self::YY_NOT_ACCEPT,
		/* 299 */ self::YY_NOT_ACCEPT,
		/* 300 */ self::YY_NOT_ACCEPT,
		/* 301 */ self::YY_NOT_ACCEPT,
		/* 302 */ self::YY_NOT_ACCEPT,
		/* 303 */ self::YY_NOT_ACCEPT,
		/* 304 */ self::YY_NOT_ACCEPT,
		/* 305 */ self::YY_NOT_ACCEPT,
		/* 306 */ self::YY_NOT_ACCEPT,
		/* 307 */ self::YY_NOT_ACCEPT,
		/* 308 */ self::YY_NOT_ACCEPT,
		/* 309 */ self::YY_NOT_ACCEPT,
		/* 310 */ self::YY_NOT_ACCEPT,
		/* 311 */ self::YY_NOT_ACCEPT,
		/* 312 */ self::YY_NOT_ACCEPT,
		/* 313 */ self::YY_NOT_ACCEPT,
		/* 314 */ self::YY_NOT_ACCEPT,
		/* 315 */ self::YY_NOT_ACCEPT,
		/* 316 */ self::YY_NOT_ACCEPT,
		/* 317 */ self::YY_NOT_ACCEPT,
		/* 318 */ self::YY_NOT_ACCEPT,
		/* 319 */ self::YY_NOT_ACCEPT,
		/* 320 */ self::YY_NOT_ACCEPT,
		/* 321 */ self::YY_NOT_ACCEPT,
		/* 322 */ self::YY_NOT_ACCEPT,
		/* 323 */ self::YY_NOT_ACCEPT,
		/* 324 */ self::YY_NOT_ACCEPT,
		/* 325 */ self::YY_NOT_ACCEPT,
		/* 326 */ self::YY_NOT_ACCEPT,
		/* 327 */ self::YY_NOT_ACCEPT,
		/* 328 */ self::YY_NOT_ACCEPT,
		/* 329 */ self::YY_NOT_ACCEPT,
		/* 330 */ self::YY_NOT_ACCEPT,
		/* 331 */ self::YY_NOT_ACCEPT,
		/* 332 */ self::YY_NOT_ACCEPT,
		/* 333 */ self::YY_NOT_ACCEPT,
		/* 334 */ self::YY_NOT_ACCEPT,
		/* 335 */ self::YY_NOT_ACCEPT,
		/* 336 */ self::YY_NOT_ACCEPT,
		/* 337 */ self::YY_NOT_ACCEPT,
		/* 338 */ self::YY_NOT_ACCEPT,
		/* 339 */ self::YY_NOT_ACCEPT,
		/* 340 */ self::YY_NOT_ACCEPT,
		/* 341 */ self::YY_NOT_ACCEPT,
		/* 342 */ self::YY_NOT_ACCEPT,
		/* 343 */ self::YY_NOT_ACCEPT,
		/* 344 */ self::YY_NOT_ACCEPT,
		/* 345 */ self::YY_NOT_ACCEPT,
		/* 346 */ self::YY_NOT_ACCEPT,
		/* 347 */ self::YY_NOT_ACCEPT,
		/* 348 */ self::YY_NOT_ACCEPT,
		/* 349 */ self::YY_NOT_ACCEPT,
		/* 350 */ self::YY_NOT_ACCEPT,
		/* 351 */ self::YY_NOT_ACCEPT,
		/* 352 */ self::YY_NOT_ACCEPT,
		/* 353 */ self::YY_NOT_ACCEPT,
		/* 354 */ self::YY_NOT_ACCEPT,
		/* 355 */ self::YY_NOT_ACCEPT,
		/* 356 */ self::YY_NOT_ACCEPT,
		/* 357 */ self::YY_NOT_ACCEPT,
		/* 358 */ self::YY_NOT_ACCEPT,
		/* 359 */ self::YY_NOT_ACCEPT,
		/* 360 */ self::YY_NOT_ACCEPT,
		/* 361 */ self::YY_NOT_ACCEPT,
		/* 362 */ self::YY_NOT_ACCEPT,
		/* 363 */ self::YY_NOT_ACCEPT,
		/* 364 */ self::YY_NOT_ACCEPT,
		/* 365 */ self::YY_NOT_ACCEPT,
		/* 366 */ self::YY_NOT_ACCEPT,
		/* 367 */ self::YY_NOT_ACCEPT,
		/* 368 */ self::YY_NOT_ACCEPT,
		/* 369 */ self::YY_NOT_ACCEPT,
		/* 370 */ self::YY_NOT_ACCEPT,
		/* 371 */ self::YY_NOT_ACCEPT,
		/* 372 */ self::YY_NOT_ACCEPT,
		/* 373 */ self::YY_NOT_ACCEPT,
		/* 374 */ self::YY_NOT_ACCEPT,
		/* 375 */ self::YY_NOT_ACCEPT,
		/* 376 */ self::YY_NOT_ACCEPT,
		/* 377 */ self::YY_NOT_ACCEPT,
		/* 378 */ self::YY_NOT_ACCEPT,
		/* 379 */ self::YY_NOT_ACCEPT,
		/* 380 */ self::YY_NOT_ACCEPT,
		/* 381 */ self::YY_NOT_ACCEPT,
		/* 382 */ self::YY_NOT_ACCEPT,
		/* 383 */ self::YY_NOT_ACCEPT,
		/* 384 */ self::YY_NOT_ACCEPT,
		/* 385 */ self::YY_NOT_ACCEPT,
		/* 386 */ self::YY_NOT_ACCEPT,
		/* 387 */ self::YY_NOT_ACCEPT,
		/* 388 */ self::YY_NOT_ACCEPT,
		/* 389 */ self::YY_NOT_ACCEPT,
		/* 390 */ self::YY_NOT_ACCEPT,
		/* 391 */ self::YY_NOT_ACCEPT,
		/* 392 */ self::YY_NOT_ACCEPT,
		/* 393 */ self::YY_NOT_ACCEPT,
		/* 394 */ self::YY_NOT_ACCEPT,
		/* 395 */ self::YY_NOT_ACCEPT,
		/* 396 */ self::YY_NOT_ACCEPT,
		/* 397 */ self::YY_NOT_ACCEPT,
		/* 398 */ self::YY_NOT_ACCEPT,
		/* 399 */ self::YY_NOT_ACCEPT,
		/* 400 */ self::YY_NOT_ACCEPT,
		/* 401 */ self::YY_NOT_ACCEPT,
		/* 402 */ self::YY_NOT_ACCEPT,
		/* 403 */ self::YY_NOT_ACCEPT,
		/* 404 */ self::YY_NOT_ACCEPT,
		/* 405 */ self::YY_NOT_ACCEPT,
		/* 406 */ self::YY_NOT_ACCEPT,
		/* 407 */ self::YY_NOT_ACCEPT,
		/* 408 */ self::YY_NOT_ACCEPT,
		/* 409 */ self::YY_NOT_ACCEPT,
		/* 410 */ self::YY_NOT_ACCEPT,
		/* 411 */ self::YY_NOT_ACCEPT,
		/* 412 */ self::YY_NOT_ACCEPT,
		/* 413 */ self::YY_NOT_ACCEPT,
		/* 414 */ self::YY_NOT_ACCEPT,
		/* 415 */ self::YY_NOT_ACCEPT,
		/* 416 */ self::YY_NOT_ACCEPT,
		/* 417 */ self::YY_NOT_ACCEPT,
		/* 418 */ self::YY_NOT_ACCEPT,
		/* 419 */ self::YY_NOT_ACCEPT,
		/* 420 */ self::YY_NOT_ACCEPT,
		/* 421 */ self::YY_NOT_ACCEPT,
		/* 422 */ self::YY_NOT_ACCEPT,
		/* 423 */ self::YY_NOT_ACCEPT,
		/* 424 */ self::YY_NOT_ACCEPT,
		/* 425 */ self::YY_NOT_ACCEPT,
		/* 426 */ self::YY_NOT_ACCEPT,
		/* 427 */ self::YY_NOT_ACCEPT,
		/* 428 */ self::YY_NOT_ACCEPT,
		/* 429 */ self::YY_NOT_ACCEPT,
		/* 430 */ self::YY_NOT_ACCEPT,
		/* 431 */ self::YY_NOT_ACCEPT,
		/* 432 */ self::YY_NOT_ACCEPT,
		/* 433 */ self::YY_NOT_ACCEPT,
		/* 434 */ self::YY_NOT_ACCEPT,
		/* 435 */ self::YY_NOT_ACCEPT,
		/* 436 */ self::YY_NOT_ACCEPT,
		/* 437 */ self::YY_NOT_ACCEPT,
		/* 438 */ self::YY_NOT_ACCEPT,
		/* 439 */ self::YY_NOT_ACCEPT,
		/* 440 */ self::YY_NOT_ACCEPT,
		/* 441 */ self::YY_NOT_ACCEPT,
		/* 442 */ self::YY_NOT_ACCEPT,
		/* 443 */ self::YY_NOT_ACCEPT,
		/* 444 */ self::YY_NOT_ACCEPT,
		/* 445 */ self::YY_NOT_ACCEPT,
		/* 446 */ self::YY_NOT_ACCEPT,
		/* 447 */ self::YY_NOT_ACCEPT,
		/* 448 */ self::YY_NOT_ACCEPT,
		/* 449 */ self::YY_NOT_ACCEPT,
		/* 450 */ self::YY_NOT_ACCEPT,
		/* 451 */ self::YY_NOT_ACCEPT,
		/* 452 */ self::YY_NOT_ACCEPT,
		/* 453 */ self::YY_NOT_ACCEPT,
		/* 454 */ self::YY_NOT_ACCEPT,
		/* 455 */ self::YY_NOT_ACCEPT,
		/* 456 */ self::YY_NOT_ACCEPT,
		/* 457 */ self::YY_NOT_ACCEPT,
		/* 458 */ self::YY_NOT_ACCEPT,
		/* 459 */ self::YY_NOT_ACCEPT,
		/* 460 */ self::YY_NOT_ACCEPT,
		/* 461 */ self::YY_NOT_ACCEPT,
		/* 462 */ self::YY_NOT_ACCEPT,
		/* 463 */ self::YY_NOT_ACCEPT,
		/* 464 */ self::YY_NOT_ACCEPT,
		/* 465 */ self::YY_NOT_ACCEPT,
		/* 466 */ self::YY_NOT_ACCEPT,
		/* 467 */ self::YY_NOT_ACCEPT,
		/* 468 */ self::YY_NOT_ACCEPT,
		/* 469 */ self::YY_NOT_ACCEPT,
		/* 470 */ self::YY_NOT_ACCEPT,
		/* 471 */ self::YY_NOT_ACCEPT,
		/* 472 */ self::YY_NOT_ACCEPT,
		/* 473 */ self::YY_NOT_ACCEPT,
		/* 474 */ self::YY_NOT_ACCEPT,
		/* 475 */ self::YY_NOT_ACCEPT,
		/* 476 */ self::YY_NOT_ACCEPT,
		/* 477 */ self::YY_NOT_ACCEPT,
		/* 478 */ self::YY_NOT_ACCEPT,
		/* 479 */ self::YY_NOT_ACCEPT,
		/* 480 */ self::YY_NOT_ACCEPT,
		/* 481 */ self::YY_NOT_ACCEPT,
		/* 482 */ self::YY_NOT_ACCEPT,
		/* 483 */ self::YY_NOT_ACCEPT,
		/* 484 */ self::YY_NOT_ACCEPT,
		/* 485 */ self::YY_NOT_ACCEPT,
		/* 486 */ self::YY_NOT_ACCEPT,
		/* 487 */ self::YY_NOT_ACCEPT,
		/* 488 */ self::YY_NOT_ACCEPT,
		/* 489 */ self::YY_NOT_ACCEPT,
		/* 490 */ self::YY_NOT_ACCEPT,
		/* 491 */ self::YY_NOT_ACCEPT,
		/* 492 */ self::YY_NOT_ACCEPT,
		/* 493 */ self::YY_NOT_ACCEPT,
		/* 494 */ self::YY_NOT_ACCEPT,
		/* 495 */ self::YY_NOT_ACCEPT,
		/* 496 */ self::YY_NOT_ACCEPT,
		/* 497 */ self::YY_NOT_ACCEPT,
		/* 498 */ self::YY_NOT_ACCEPT,
		/* 499 */ self::YY_NOT_ACCEPT,
		/* 500 */ self::YY_NOT_ACCEPT,
		/* 501 */ self::YY_NOT_ACCEPT,
		/* 502 */ self::YY_NOT_ACCEPT,
		/* 503 */ self::YY_NOT_ACCEPT,
		/* 504 */ self::YY_NOT_ACCEPT,
		/* 505 */ self::YY_NOT_ACCEPT,
		/* 506 */ self::YY_NOT_ACCEPT,
		/* 507 */ self::YY_NOT_ACCEPT,
		/* 508 */ self::YY_NOT_ACCEPT,
		/* 509 */ self::YY_NOT_ACCEPT,
		/* 510 */ self::YY_NOT_ACCEPT,
		/* 511 */ self::YY_NOT_ACCEPT,
		/* 512 */ self::YY_NOT_ACCEPT,
		/* 513 */ self::YY_NOT_ACCEPT,
		/* 514 */ self::YY_NOT_ACCEPT,
		/* 515 */ self::YY_NOT_ACCEPT,
		/* 516 */ self::YY_NOT_ACCEPT,
		/* 517 */ self::YY_NOT_ACCEPT,
		/* 518 */ self::YY_NOT_ACCEPT,
		/* 519 */ self::YY_NOT_ACCEPT,
		/* 520 */ self::YY_NOT_ACCEPT,
		/* 521 */ self::YY_NOT_ACCEPT,
		/* 522 */ self::YY_NOT_ACCEPT,
		/* 523 */ self::YY_NOT_ACCEPT,
		/* 524 */ self::YY_NOT_ACCEPT,
		/* 525 */ self::YY_NOT_ACCEPT,
		/* 526 */ self::YY_NOT_ACCEPT,
		/* 527 */ self::YY_NOT_ACCEPT,
		/* 528 */ self::YY_NOT_ACCEPT,
		/* 529 */ self::YY_NOT_ACCEPT,
		/* 530 */ self::YY_NOT_ACCEPT,
		/* 531 */ self::YY_NOT_ACCEPT,
		/* 532 */ self::YY_NOT_ACCEPT,
		/* 533 */ self::YY_NOT_ACCEPT,
		/* 534 */ self::YY_NOT_ACCEPT,
		/* 535 */ self::YY_NOT_ACCEPT,
		/* 536 */ self::YY_NOT_ACCEPT,
		/* 537 */ self::YY_NOT_ACCEPT,
		/* 538 */ self::YY_NOT_ACCEPT,
		/* 539 */ self::YY_NOT_ACCEPT,
		/* 540 */ self::YY_NOT_ACCEPT,
		/* 541 */ self::YY_NOT_ACCEPT,
		/* 542 */ self::YY_NOT_ACCEPT,
		/* 543 */ self::YY_NOT_ACCEPT,
		/* 544 */ self::YY_NOT_ACCEPT,
		/* 545 */ self::YY_NOT_ACCEPT,
		/* 546 */ self::YY_NOT_ACCEPT,
		/* 547 */ self::YY_NOT_ACCEPT,
		/* 548 */ self::YY_NOT_ACCEPT,
		/* 549 */ self::YY_NOT_ACCEPT,
		/* 550 */ self::YY_NOT_ACCEPT,
		/* 551 */ self::YY_NOT_ACCEPT,
		/* 552 */ self::YY_NOT_ACCEPT,
		/* 553 */ self::YY_NOT_ACCEPT,
		/* 554 */ self::YY_NOT_ACCEPT,
		/* 555 */ self::YY_NOT_ACCEPT,
		/* 556 */ self::YY_NOT_ACCEPT,
		/* 557 */ self::YY_NOT_ACCEPT,
		/* 558 */ self::YY_NOT_ACCEPT,
		/* 559 */ self::YY_NOT_ACCEPT,
		/* 560 */ self::YY_NOT_ACCEPT,
		/* 561 */ self::YY_NOT_ACCEPT,
		/* 562 */ self::YY_NOT_ACCEPT,
		/* 563 */ self::YY_NOT_ACCEPT,
		/* 564 */ self::YY_NOT_ACCEPT,
		/* 565 */ self::YY_NOT_ACCEPT,
		/* 566 */ self::YY_NOT_ACCEPT,
		/* 567 */ self::YY_NOT_ACCEPT,
		/* 568 */ self::YY_NOT_ACCEPT,
		/* 569 */ self::YY_NOT_ACCEPT,
		/* 570 */ self::YY_NOT_ACCEPT,
		/* 571 */ self::YY_NOT_ACCEPT,
		/* 572 */ self::YY_NOT_ACCEPT,
		/* 573 */ self::YY_NOT_ACCEPT,
		/* 574 */ self::YY_NOT_ACCEPT,
		/* 575 */ self::YY_NOT_ACCEPT,
		/* 576 */ self::YY_NOT_ACCEPT,
		/* 577 */ self::YY_NOT_ACCEPT,
		/* 578 */ self::YY_NOT_ACCEPT,
		/* 579 */ self::YY_NOT_ACCEPT,
		/* 580 */ self::YY_NOT_ACCEPT,
		/* 581 */ self::YY_NOT_ACCEPT,
		/* 582 */ self::YY_NOT_ACCEPT,
		/* 583 */ self::YY_NOT_ACCEPT,
		/* 584 */ self::YY_NOT_ACCEPT,
		/* 585 */ self::YY_NOT_ACCEPT,
		/* 586 */ self::YY_NOT_ACCEPT,
		/* 587 */ self::YY_NOT_ACCEPT,
		/* 588 */ self::YY_NOT_ACCEPT,
		/* 589 */ self::YY_NOT_ACCEPT,
		/* 590 */ self::YY_NOT_ACCEPT,
		/* 591 */ self::YY_NOT_ACCEPT,
		/* 592 */ self::YY_NOT_ACCEPT,
		/* 593 */ self::YY_NOT_ACCEPT,
		/* 594 */ self::YY_NOT_ACCEPT,
		/* 595 */ self::YY_NOT_ACCEPT,
		/* 596 */ self::YY_NOT_ACCEPT,
		/* 597 */ self::YY_NOT_ACCEPT,
		/* 598 */ self::YY_NOT_ACCEPT,
		/* 599 */ self::YY_NOT_ACCEPT,
		/* 600 */ self::YY_NOT_ACCEPT,
		/* 601 */ self::YY_NOT_ACCEPT,
		/* 602 */ self::YY_NOT_ACCEPT,
		/* 603 */ self::YY_NOT_ACCEPT,
		/* 604 */ self::YY_NOT_ACCEPT,
		/* 605 */ self::YY_NOT_ACCEPT,
		/* 606 */ self::YY_NOT_ACCEPT,
		/* 607 */ self::YY_NOT_ACCEPT,
		/* 608 */ self::YY_NOT_ACCEPT,
		/* 609 */ self::YY_NOT_ACCEPT,
		/* 610 */ self::YY_NOT_ACCEPT,
		/* 611 */ self::YY_NOT_ACCEPT,
		/* 612 */ self::YY_NOT_ACCEPT,
		/* 613 */ self::YY_NOT_ACCEPT,
		/* 614 */ self::YY_NOT_ACCEPT,
		/* 615 */ self::YY_NOT_ACCEPT,
		/* 616 */ self::YY_NOT_ACCEPT,
		/* 617 */ self::YY_NOT_ACCEPT,
		/* 618 */ self::YY_NOT_ACCEPT,
		/* 619 */ self::YY_NOT_ACCEPT,
		/* 620 */ self::YY_NOT_ACCEPT,
		/* 621 */ self::YY_NOT_ACCEPT,
		/* 622 */ self::YY_NOT_ACCEPT,
		/* 623 */ self::YY_NOT_ACCEPT,
		/* 624 */ self::YY_NOT_ACCEPT,
		/* 625 */ self::YY_NOT_ACCEPT,
		/* 626 */ self::YY_NOT_ACCEPT,
		/* 627 */ self::YY_NOT_ACCEPT,
		/* 628 */ self::YY_NOT_ACCEPT,
		/* 629 */ self::YY_NOT_ACCEPT,
		/* 630 */ self::YY_NOT_ACCEPT,
		/* 631 */ self::YY_NOT_ACCEPT,
		/* 632 */ self::YY_NOT_ACCEPT,
		/* 633 */ self::YY_NOT_ACCEPT,
		/* 634 */ self::YY_NOT_ACCEPT,
		/* 635 */ self::YY_NOT_ACCEPT,
		/* 636 */ self::YY_NO_ANCHOR,
		/* 637 */ self::YY_NO_ANCHOR,
		/* 638 */ self::YY_NOT_ACCEPT,
		/* 639 */ self::YY_NOT_ACCEPT,
		/* 640 */ self::YY_NOT_ACCEPT,
		/* 641 */ self::YY_NO_ANCHOR,
		/* 642 */ self::YY_NOT_ACCEPT,
		/* 643 */ self::YY_NO_ANCHOR,
		/* 644 */ self::YY_NOT_ACCEPT,
		/* 645 */ self::YY_NOT_ACCEPT,
		/* 646 */ self::YY_NO_ANCHOR,
		/* 647 */ self::YY_NOT_ACCEPT,
		/* 648 */ self::YY_NOT_ACCEPT,
		/* 649 */ self::YY_NOT_ACCEPT,
		/* 650 */ self::YY_NOT_ACCEPT,
		/* 651 */ self::YY_NOT_ACCEPT,
		/* 652 */ self::YY_NOT_ACCEPT,
		/* 653 */ self::YY_NOT_ACCEPT,
		/* 654 */ self::YY_NOT_ACCEPT,
		/* 655 */ self::YY_NOT_ACCEPT,
		/* 656 */ self::YY_NOT_ACCEPT,
		/* 657 */ self::YY_NOT_ACCEPT,
		/* 658 */ self::YY_NOT_ACCEPT,
		/* 659 */ self::YY_NOT_ACCEPT,
		/* 660 */ self::YY_NOT_ACCEPT,
		/* 661 */ self::YY_NOT_ACCEPT,
		/* 662 */ self::YY_NOT_ACCEPT,
		/* 663 */ self::YY_NOT_ACCEPT,
		/* 664 */ self::YY_NOT_ACCEPT,
		/* 665 */ self::YY_NOT_ACCEPT,
		/* 666 */ self::YY_NOT_ACCEPT,
		/* 667 */ self::YY_NOT_ACCEPT,
		/* 668 */ self::YY_NOT_ACCEPT,
		/* 669 */ self::YY_NOT_ACCEPT,
		/* 670 */ self::YY_NOT_ACCEPT,
		/* 671 */ self::YY_NOT_ACCEPT,
		/* 672 */ self::YY_NOT_ACCEPT,
		/* 673 */ self::YY_NOT_ACCEPT,
		/* 674 */ self::YY_NOT_ACCEPT,
		/* 675 */ self::YY_NOT_ACCEPT,
		/* 676 */ self::YY_NOT_ACCEPT,
		/* 677 */ self::YY_NOT_ACCEPT,
		/* 678 */ self::YY_NOT_ACCEPT,
		/* 679 */ self::YY_NOT_ACCEPT,
		/* 680 */ self::YY_NOT_ACCEPT,
		/* 681 */ self::YY_NOT_ACCEPT,
		/* 682 */ self::YY_NOT_ACCEPT,
		/* 683 */ self::YY_NOT_ACCEPT,
		/* 684 */ self::YY_NOT_ACCEPT,
		/* 685 */ self::YY_NOT_ACCEPT,
		/* 686 */ self::YY_NOT_ACCEPT,
		/* 687 */ self::YY_NOT_ACCEPT,
		/* 688 */ self::YY_NOT_ACCEPT,
		/* 689 */ self::YY_NOT_ACCEPT,
		/* 690 */ self::YY_NOT_ACCEPT,
		/* 691 */ self::YY_NOT_ACCEPT,
		/* 692 */ self::YY_NOT_ACCEPT,
		/* 693 */ self::YY_NOT_ACCEPT,
		/* 694 */ self::YY_NOT_ACCEPT,
		/* 695 */ self::YY_NOT_ACCEPT,
		/* 696 */ self::YY_NOT_ACCEPT,
		/* 697 */ self::YY_NOT_ACCEPT,
		/* 698 */ self::YY_NOT_ACCEPT,
		/* 699 */ self::YY_NOT_ACCEPT,
		/* 700 */ self::YY_NOT_ACCEPT,
		/* 701 */ self::YY_NOT_ACCEPT,
		/* 702 */ self::YY_NOT_ACCEPT,
		/* 703 */ self::YY_NOT_ACCEPT,
		/* 704 */ self::YY_NOT_ACCEPT,
		/* 705 */ self::YY_NOT_ACCEPT,
		/* 706 */ self::YY_NOT_ACCEPT,
		/* 707 */ self::YY_NOT_ACCEPT,
		/* 708 */ self::YY_NOT_ACCEPT,
		/* 709 */ self::YY_NOT_ACCEPT,
		/* 710 */ self::YY_NOT_ACCEPT,
		/* 711 */ self::YY_NOT_ACCEPT,
		/* 712 */ self::YY_NOT_ACCEPT,
		/* 713 */ self::YY_NOT_ACCEPT,
		/* 714 */ self::YY_NOT_ACCEPT,
		/* 715 */ self::YY_NOT_ACCEPT,
		/* 716 */ self::YY_NOT_ACCEPT,
		/* 717 */ self::YY_NOT_ACCEPT,
		/* 718 */ self::YY_NOT_ACCEPT,
		/* 719 */ self::YY_NOT_ACCEPT,
		/* 720 */ self::YY_NOT_ACCEPT,
		/* 721 */ self::YY_NOT_ACCEPT,
		/* 722 */ self::YY_NOT_ACCEPT,
		/* 723 */ self::YY_NOT_ACCEPT,
		/* 724 */ self::YY_NOT_ACCEPT,
		/* 725 */ self::YY_NOT_ACCEPT,
		/* 726 */ self::YY_NOT_ACCEPT,
		/* 727 */ self::YY_NOT_ACCEPT,
		/* 728 */ self::YY_NOT_ACCEPT,
		/* 729 */ self::YY_NOT_ACCEPT,
		/* 730 */ self::YY_NOT_ACCEPT,
		/* 731 */ self::YY_NOT_ACCEPT,
		/* 732 */ self::YY_NOT_ACCEPT,
		/* 733 */ self::YY_NOT_ACCEPT,
		/* 734 */ self::YY_NOT_ACCEPT,
		/* 735 */ self::YY_NOT_ACCEPT,
		/* 736 */ self::YY_NOT_ACCEPT,
		/* 737 */ self::YY_NOT_ACCEPT,
		/* 738 */ self::YY_NOT_ACCEPT,
		/* 739 */ self::YY_NOT_ACCEPT,
		/* 740 */ self::YY_NO_ANCHOR,
		/* 741 */ self::YY_NO_ANCHOR,
		/* 742 */ self::YY_NOT_ACCEPT,
		/* 743 */ self::YY_NOT_ACCEPT,
		/* 744 */ self::YY_NOT_ACCEPT,
		/* 745 */ self::YY_NOT_ACCEPT,
		/* 746 */ self::YY_NOT_ACCEPT,
		/* 747 */ self::YY_NOT_ACCEPT,
		/* 748 */ self::YY_NOT_ACCEPT,
		/* 749 */ self::YY_NOT_ACCEPT,
		/* 750 */ self::YY_NOT_ACCEPT,
		/* 751 */ self::YY_NOT_ACCEPT,
		/* 752 */ self::YY_NOT_ACCEPT,
		/* 753 */ self::YY_NOT_ACCEPT,
		/* 754 */ self::YY_NOT_ACCEPT,
		/* 755 */ self::YY_NOT_ACCEPT,
		/* 756 */ self::YY_NOT_ACCEPT,
		/* 757 */ self::YY_NOT_ACCEPT,
		/* 758 */ self::YY_NOT_ACCEPT,
		/* 759 */ self::YY_NOT_ACCEPT,
		/* 760 */ self::YY_NOT_ACCEPT,
		/* 761 */ self::YY_NOT_ACCEPT,
		/* 762 */ self::YY_NOT_ACCEPT,
		/* 763 */ self::YY_NOT_ACCEPT,
		/* 764 */ self::YY_NOT_ACCEPT,
		/* 765 */ self::YY_NOT_ACCEPT,
		/* 766 */ self::YY_NOT_ACCEPT,
		/* 767 */ self::YY_NOT_ACCEPT,
		/* 768 */ self::YY_NOT_ACCEPT,
		/* 769 */ self::YY_NOT_ACCEPT,
		/* 770 */ self::YY_NOT_ACCEPT,
		/* 771 */ self::YY_NOT_ACCEPT,
		/* 772 */ self::YY_NOT_ACCEPT,
		/* 773 */ self::YY_NOT_ACCEPT,
		/* 774 */ self::YY_NOT_ACCEPT,
		/* 775 */ self::YY_NOT_ACCEPT,
		/* 776 */ self::YY_NOT_ACCEPT,
		/* 777 */ self::YY_NOT_ACCEPT,
		/* 778 */ self::YY_NOT_ACCEPT,
		/* 779 */ self::YY_NOT_ACCEPT,
		/* 780 */ self::YY_NOT_ACCEPT,
		/* 781 */ self::YY_NO_ANCHOR,
		/* 782 */ self::YY_NO_ANCHOR,
		/* 783 */ self::YY_NOT_ACCEPT,
		/* 784 */ self::YY_NOT_ACCEPT,
		/* 785 */ self::YY_NOT_ACCEPT,
		/* 786 */ self::YY_NOT_ACCEPT,
		/* 787 */ self::YY_NOT_ACCEPT,
		/* 788 */ self::YY_NOT_ACCEPT,
		/* 789 */ self::YY_NOT_ACCEPT,
		/* 790 */ self::YY_NOT_ACCEPT,
		/* 791 */ self::YY_NOT_ACCEPT,
		/* 792 */ self::YY_NOT_ACCEPT,
		/* 793 */ self::YY_NOT_ACCEPT,
		/* 794 */ self::YY_NOT_ACCEPT,
		/* 795 */ self::YY_NOT_ACCEPT,
		/* 796 */ self::YY_NO_ANCHOR,
		/* 797 */ self::YY_NO_ANCHOR,
		/* 798 */ self::YY_NOT_ACCEPT,
		/* 799 */ self::YY_NOT_ACCEPT,
		/* 800 */ self::YY_NOT_ACCEPT,
		/* 801 */ self::YY_NOT_ACCEPT,
		/* 802 */ self::YY_NOT_ACCEPT,
		/* 803 */ self::YY_NOT_ACCEPT,
		/* 804 */ self::YY_NOT_ACCEPT,
		/* 805 */ self::YY_NOT_ACCEPT,
		/* 806 */ self::YY_NO_ANCHOR,
		/* 807 */ self::YY_NO_ANCHOR,
		/* 808 */ self::YY_NOT_ACCEPT,
		/* 809 */ self::YY_NOT_ACCEPT,
		/* 810 */ self::YY_NOT_ACCEPT,
		/* 811 */ self::YY_NOT_ACCEPT,
		/* 812 */ self::YY_NOT_ACCEPT,
		/* 813 */ self::YY_NOT_ACCEPT,
		/* 814 */ self::YY_NOT_ACCEPT,
		/* 815 */ self::YY_NO_ANCHOR,
		/* 816 */ self::YY_NO_ANCHOR,
		/* 817 */ self::YY_NOT_ACCEPT,
		/* 818 */ self::YY_NOT_ACCEPT,
		/* 819 */ self::YY_NOT_ACCEPT,
		/* 820 */ self::YY_NOT_ACCEPT,
		/* 821 */ self::YY_NO_ANCHOR,
		/* 822 */ self::YY_NO_ANCHOR,
		/* 823 */ self::YY_NOT_ACCEPT,
		/* 824 */ self::YY_NOT_ACCEPT,
		/* 825 */ self::YY_NO_ANCHOR,
		/* 826 */ self::YY_NO_ANCHOR,
		/* 827 */ self::YY_NOT_ACCEPT,
		/* 828 */ self::YY_NOT_ACCEPT,
		/* 829 */ self::YY_NO_ANCHOR,
		/* 830 */ self::YY_NO_ANCHOR,
		/* 831 */ self::YY_NOT_ACCEPT,
		/* 832 */ self::YY_NOT_ACCEPT,
		/* 833 */ self::YY_NO_ANCHOR,
		/* 834 */ self::YY_NO_ANCHOR,
		/* 835 */ self::YY_NOT_ACCEPT,
		/* 836 */ self::YY_NO_ANCHOR,
		/* 837 */ self::YY_NO_ANCHOR,
		/* 838 */ self::YY_NOT_ACCEPT,
		/* 839 */ self::YY_NO_ANCHOR,
		/* 840 */ self::YY_NO_ANCHOR,
		/* 841 */ self::YY_NOT_ACCEPT,
		/* 842 */ self::YY_NO_ANCHOR,
		/* 843 */ self::YY_NO_ANCHOR,
		/* 844 */ self::YY_NOT_ACCEPT,
		/* 845 */ self::YY_NO_ANCHOR,
		/* 846 */ self::YY_NO_ANCHOR,
		/* 847 */ self::YY_NOT_ACCEPT,
		/* 848 */ self::YY_NO_ANCHOR,
		/* 849 */ self::YY_NO_ANCHOR,
		/* 850 */ self::YY_NOT_ACCEPT,
		/* 851 */ self::YY_NO_ANCHOR,
		/* 852 */ self::YY_NOT_ACCEPT,
		/* 853 */ self::YY_NO_ANCHOR,
		/* 854 */ self::YY_NOT_ACCEPT,
		/* 855 */ self::YY_NOT_ACCEPT,
		/* 856 */ self::YY_NOT_ACCEPT,
		/* 857 */ self::YY_NOT_ACCEPT,
		/* 858 */ self::YY_NOT_ACCEPT,
		/* 859 */ self::YY_NOT_ACCEPT,
		/* 860 */ self::YY_NOT_ACCEPT,
		/* 861 */ self::YY_NOT_ACCEPT,
		/* 862 */ self::YY_NOT_ACCEPT,
		/* 863 */ self::YY_NOT_ACCEPT,
		/* 864 */ self::YY_NOT_ACCEPT,
		/* 865 */ self::YY_NOT_ACCEPT,
		/* 866 */ self::YY_NOT_ACCEPT,
		/* 867 */ self::YY_NOT_ACCEPT,
		/* 868 */ self::YY_NOT_ACCEPT,
		/* 869 */ self::YY_NOT_ACCEPT,
		/* 870 */ self::YY_NOT_ACCEPT,
		/* 871 */ self::YY_NOT_ACCEPT,
		/* 872 */ self::YY_NOT_ACCEPT,
		/* 873 */ self::YY_NOT_ACCEPT,
		/* 874 */ self::YY_NOT_ACCEPT,
		/* 875 */ self::YY_NOT_ACCEPT,
		/* 876 */ self::YY_NOT_ACCEPT,
		/* 877 */ self::YY_NOT_ACCEPT,
		/* 878 */ self::YY_NOT_ACCEPT,
		/* 879 */ self::YY_NOT_ACCEPT,
		/* 880 */ self::YY_NOT_ACCEPT,
		/* 881 */ self::YY_NOT_ACCEPT,
		/* 882 */ self::YY_NO_ANCHOR,
		/* 883 */ self::YY_NO_ANCHOR,
		/* 884 */ self::YY_NOT_ACCEPT,
		/* 885 */ self::YY_NOT_ACCEPT,
		/* 886 */ self::YY_NOT_ACCEPT,
		/* 887 */ self::YY_NOT_ACCEPT,
		/* 888 */ self::YY_NOT_ACCEPT,
		/* 889 */ self::YY_NOT_ACCEPT,
		/* 890 */ self::YY_NOT_ACCEPT,
		/* 891 */ self::YY_NOT_ACCEPT,
		/* 892 */ self::YY_NOT_ACCEPT,
		/* 893 */ self::YY_NOT_ACCEPT,
		/* 894 */ self::YY_NOT_ACCEPT,
		/* 895 */ self::YY_NOT_ACCEPT,
		/* 896 */ self::YY_NOT_ACCEPT,
		/* 897 */ self::YY_NOT_ACCEPT,
		/* 898 */ self::YY_NOT_ACCEPT,
		/* 899 */ self::YY_NOT_ACCEPT,
		/* 900 */ self::YY_NO_ANCHOR,
		/* 901 */ self::YY_NO_ANCHOR,
		/* 902 */ self::YY_NOT_ACCEPT,
		/* 903 */ self::YY_NOT_ACCEPT,
		/* 904 */ self::YY_NOT_ACCEPT,
		/* 905 */ self::YY_NOT_ACCEPT,
		/* 906 */ self::YY_NOT_ACCEPT,
		/* 907 */ self::YY_NOT_ACCEPT,
		/* 908 */ self::YY_NOT_ACCEPT,
		/* 909 */ self::YY_NOT_ACCEPT,
		/* 910 */ self::YY_NOT_ACCEPT,
		/* 911 */ self::YY_NO_ANCHOR,
		/* 912 */ self::YY_NO_ANCHOR,
		/* 913 */ self::YY_NOT_ACCEPT,
		/* 914 */ self::YY_NOT_ACCEPT,
		/* 915 */ self::YY_NOT_ACCEPT,
		/* 916 */ self::YY_NOT_ACCEPT,
		/* 917 */ self::YY_NOT_ACCEPT,
		/* 918 */ self::YY_NOT_ACCEPT,
		/* 919 */ self::YY_NO_ANCHOR,
		/* 920 */ self::YY_NO_ANCHOR,
		/* 921 */ self::YY_NOT_ACCEPT,
		/* 922 */ self::YY_NOT_ACCEPT,
		/* 923 */ self::YY_NOT_ACCEPT,
		/* 924 */ self::YY_NO_ANCHOR,
		/* 925 */ self::YY_NO_ANCHOR,
		/* 926 */ self::YY_NOT_ACCEPT,
		/* 927 */ self::YY_NOT_ACCEPT,
		/* 928 */ self::YY_NO_ANCHOR,
		/* 929 */ self::YY_NO_ANCHOR,
		/* 930 */ self::YY_NOT_ACCEPT,
		/* 931 */ self::YY_NO_ANCHOR,
		/* 932 */ self::YY_NO_ANCHOR,
		/* 933 */ self::YY_NOT_ACCEPT,
		/* 934 */ self::YY_NO_ANCHOR,
		/* 935 */ self::YY_NO_ANCHOR,
		/* 936 */ self::YY_NO_ANCHOR,
		/* 937 */ self::YY_NO_ANCHOR,
		/* 938 */ self::YY_NO_ANCHOR,
		/* 939 */ self::YY_NO_ANCHOR,
		/* 940 */ self::YY_NO_ANCHOR,
		/* 941 */ self::YY_NO_ANCHOR,
		/* 942 */ self::YY_NO_ANCHOR,
		/* 943 */ self::YY_NO_ANCHOR,
		/* 944 */ self::YY_NO_ANCHOR,
		/* 945 */ self::YY_NO_ANCHOR,
		/* 946 */ self::YY_NO_ANCHOR,
		/* 947 */ self::YY_NO_ANCHOR,
		/* 948 */ self::YY_NO_ANCHOR,
		/* 949 */ self::YY_NO_ANCHOR,
		/* 950 */ self::YY_NO_ANCHOR,
		/* 951 */ self::YY_NO_ANCHOR,
		/* 952 */ self::YY_NO_ANCHOR,
		/* 953 */ self::YY_NO_ANCHOR,
		/* 954 */ self::YY_NO_ANCHOR,
		/* 955 */ self::YY_NO_ANCHOR,
		/* 956 */ self::YY_NO_ANCHOR,
		/* 957 */ self::YY_NO_ANCHOR,
		/* 958 */ self::YY_NO_ANCHOR,
		/* 959 */ self::YY_NO_ANCHOR,
		/* 960 */ self::YY_NO_ANCHOR,
		/* 961 */ self::YY_NO_ANCHOR,
		/* 962 */ self::YY_NO_ANCHOR,
		/* 963 */ self::YY_NO_ANCHOR,
		/* 964 */ self::YY_NO_ANCHOR,
		/* 965 */ self::YY_NO_ANCHOR,
		/* 966 */ self::YY_NO_ANCHOR,
		/* 967 */ self::YY_NOT_ACCEPT,
		/* 968 */ self::YY_NOT_ACCEPT,
		/* 969 */ self::YY_NOT_ACCEPT,
		/* 970 */ self::YY_NOT_ACCEPT,
		/* 971 */ self::YY_NOT_ACCEPT,
		/* 972 */ self::YY_NOT_ACCEPT,
		/* 973 */ self::YY_NOT_ACCEPT,
		/* 974 */ self::YY_NOT_ACCEPT,
		/* 975 */ self::YY_NO_ANCHOR,
		/* 976 */ self::YY_NO_ANCHOR,
		/* 977 */ self::YY_NO_ANCHOR,
		/* 978 */ self::YY_NO_ANCHOR,
		/* 979 */ self::YY_NOT_ACCEPT,
		/* 980 */ self::YY_NOT_ACCEPT,
		/* 981 */ self::YY_NOT_ACCEPT,
		/* 982 */ self::YY_NOT_ACCEPT,
		/* 983 */ self::YY_NOT_ACCEPT,
		/* 984 */ self::YY_NO_ANCHOR,
		/* 985 */ self::YY_NO_ANCHOR,
		/* 986 */ self::YY_NOT_ACCEPT,
		/* 987 */ self::YY_NOT_ACCEPT,
		/* 988 */ self::YY_NOT_ACCEPT,
		/* 989 */ self::YY_NO_ANCHOR,
		/* 990 */ self::YY_NO_ANCHOR,
		/* 991 */ self::YY_NO_ANCHOR,
		/* 992 */ self::YY_NO_ANCHOR,
		/* 993 */ self::YY_NO_ANCHOR,
		/* 994 */ self::YY_NO_ANCHOR,
		/* 995 */ self::YY_NO_ANCHOR,
		/* 996 */ self::YY_NO_ANCHOR,
		/* 997 */ self::YY_NO_ANCHOR,
		/* 998 */ self::YY_NO_ANCHOR,
		/* 999 */ self::YY_NO_ANCHOR,
		/* 1000 */ self::YY_NO_ANCHOR,
		/* 1001 */ self::YY_NO_ANCHOR,
		/* 1002 */ self::YY_NO_ANCHOR,
		/* 1003 */ self::YY_NO_ANCHOR,
		/* 1004 */ self::YY_NO_ANCHOR,
		/* 1005 */ self::YY_NO_ANCHOR,
		/* 1006 */ self::YY_NO_ANCHOR,
		/* 1007 */ self::YY_NO_ANCHOR,
		/* 1008 */ self::YY_NO_ANCHOR,
		/* 1009 */ self::YY_NO_ANCHOR,
		/* 1010 */ self::YY_NO_ANCHOR,
		/* 1011 */ self::YY_NO_ANCHOR,
		/* 1012 */ self::YY_NO_ANCHOR,
		/* 1013 */ self::YY_NO_ANCHOR,
		/* 1014 */ self::YY_NO_ANCHOR,
		/* 1015 */ self::YY_NO_ANCHOR,
		/* 1016 */ self::YY_NO_ANCHOR,
		/* 1017 */ self::YY_NO_ANCHOR,
		/* 1018 */ self::YY_NO_ANCHOR,
		/* 1019 */ self::YY_NO_ANCHOR,
		/* 1020 */ self::YY_NO_ANCHOR,
		/* 1021 */ self::YY_NO_ANCHOR,
		/* 1022 */ self::YY_NO_ANCHOR,
		/* 1023 */ self::YY_NO_ANCHOR,
		/* 1024 */ self::YY_NO_ANCHOR,
		/* 1025 */ self::YY_NO_ANCHOR,
		/* 1026 */ self::YY_NO_ANCHOR,
		/* 1027 */ self::YY_NO_ANCHOR,
		/* 1028 */ self::YY_NO_ANCHOR,
		/* 1029 */ self::YY_NO_ANCHOR,
		/* 1030 */ self::YY_NO_ANCHOR,
		/* 1031 */ self::YY_NO_ANCHOR,
		/* 1032 */ self::YY_NO_ANCHOR,
		/* 1033 */ self::YY_NO_ANCHOR,
		/* 1034 */ self::YY_NO_ANCHOR,
		/* 1035 */ self::YY_NO_ANCHOR,
		/* 1036 */ self::YY_NO_ANCHOR,
		/* 1037 */ self::YY_NOT_ACCEPT,
		/* 1038 */ self::YY_NOT_ACCEPT,
		/* 1039 */ self::YY_NOT_ACCEPT,
		/* 1040 */ self::YY_NO_ANCHOR,
		/* 1041 */ self::YY_NO_ANCHOR,
		/* 1042 */ self::YY_NO_ANCHOR,
		/* 1043 */ self::YY_NO_ANCHOR,
		/* 1044 */ self::YY_NOT_ACCEPT,
		/* 1045 */ self::YY_NOT_ACCEPT,
		/* 1046 */ self::YY_NO_ANCHOR,
		/* 1047 */ self::YY_NO_ANCHOR,
		/* 1048 */ self::YY_NO_ANCHOR,
		/* 1049 */ self::YY_NO_ANCHOR,
		/* 1050 */ self::YY_NO_ANCHOR,
		/* 1051 */ self::YY_NO_ANCHOR,
		/* 1052 */ self::YY_NO_ANCHOR,
		/* 1053 */ self::YY_NO_ANCHOR,
		/* 1054 */ self::YY_NO_ANCHOR,
		/* 1055 */ self::YY_NO_ANCHOR,
		/* 1056 */ self::YY_NO_ANCHOR,
		/* 1057 */ self::YY_NO_ANCHOR,
		/* 1058 */ self::YY_NO_ANCHOR,
		/* 1059 */ self::YY_NO_ANCHOR,
		/* 1060 */ self::YY_NO_ANCHOR,
		/* 1061 */ self::YY_NO_ANCHOR,
		/* 1062 */ self::YY_NO_ANCHOR,
		/* 1063 */ self::YY_NO_ANCHOR,
		/* 1064 */ self::YY_NO_ANCHOR,
		/* 1065 */ self::YY_NO_ANCHOR,
		/* 1066 */ self::YY_NO_ANCHOR,
		/* 1067 */ self::YY_NO_ANCHOR,
		/* 1068 */ self::YY_NO_ANCHOR,
		/* 1069 */ self::YY_NO_ANCHOR,
		/* 1070 */ self::YY_NO_ANCHOR,
		/* 1071 */ self::YY_NO_ANCHOR,
		/* 1072 */ self::YY_NO_ANCHOR,
		/* 1073 */ self::YY_NO_ANCHOR,
		/* 1074 */ self::YY_NO_ANCHOR,
		/* 1075 */ self::YY_NOT_ACCEPT,
		/* 1076 */ self::YY_NO_ANCHOR,
		/* 1077 */ self::YY_NO_ANCHOR,
		/* 1078 */ self::YY_NO_ANCHOR,
		/* 1079 */ self::YY_NO_ANCHOR,
		/* 1080 */ self::YY_NO_ANCHOR,
		/* 1081 */ self::YY_NO_ANCHOR,
		/* 1082 */ self::YY_NO_ANCHOR,
		/* 1083 */ self::YY_NO_ANCHOR,
		/* 1084 */ self::YY_NO_ANCHOR,
		/* 1085 */ self::YY_NO_ANCHOR,
		/* 1086 */ self::YY_NO_ANCHOR,
		/* 1087 */ self::YY_NO_ANCHOR
	);
		static $yy_cmap = array(
 38, 38, 38, 38, 38, 38, 38, 38, 38, 32, 29, 38, 32, 32, 38, 38, 38, 38, 38, 38,
 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 27, 38, 38, 38, 38, 38, 35, 38,
 33, 33, 38, 38, 36, 24, 2, 30, 1, 34, 34, 34, 34, 34, 34, 34, 34, 34, 38, 38,
 38, 38, 38, 38, 38, 18, 12, 3, 7, 6, 19, 26, 21, 15, 37, 5, 14, 11, 16, 4,
 22, 28, 8, 13, 23, 10, 17, 20, 31, 9, 25, 38, 38, 38, 38, 37, 38, 18, 12, 3,
 7, 6, 19, 26, 21, 15, 37, 5, 14, 11, 16, 4, 22, 28, 8, 13, 23, 10, 17, 20,
 31, 9, 25, 38, 38, 38, 38, 38, 0, 0,);

		static $yy_rmap = array(
 0, 1, 2, 3, 1, 4, 1, 1, 1, 1, 5, 6, 1, 7, 8, 1, 1, 9, 1, 10,
 11, 12, 13, 1, 14, 1, 15, 16, 17, 1, 1, 18, 1, 1, 1, 1, 1, 1, 1, 1,
 1, 19, 1, 1, 1, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 1, 1, 1, 30, 31,
 1, 1, 1, 1, 32, 1, 1, 33, 34, 33, 33, 33, 33, 35, 36, 1, 1, 35, 3, 3,
 37, 38, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 39, 1,
 40, 41, 42, 43, 44, 45, 44, 17, 26, 46, 1, 47, 1, 48, 1, 49, 50, 51, 52, 53,
 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73,
 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93,
 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113,
 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133,
 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 49, 151, 152,
 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 108, 165, 166, 167, 168, 169, 170, 171,
 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191,
 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211,
 212, 213, 214, 215, 216, 217, 218, 219, 169, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230,
 231, 232, 233, 234, 235, 200, 236, 237, 238, 239, 240, 241, 242, 243, 244, 245, 246, 247, 248, 249,
 250, 251, 252, 253, 254, 255, 256, 257, 258, 259, 260, 261, 262, 263, 264, 265, 266, 267, 268, 269,
 270, 271, 272, 273, 274, 275, 276, 277, 278, 279, 280, 281, 282, 283, 284, 285, 286, 287, 288, 289,
 290, 291, 292, 293, 294, 295, 296, 297, 298, 299, 300, 301, 302, 303, 304, 305, 306, 307, 308, 309,
 310, 311, 312, 313, 314, 315, 316, 317, 318, 319, 320, 321, 322, 323, 324, 279, 301, 325, 326, 327,
 328, 329, 330, 331, 332, 333, 334, 335, 336, 337, 338, 339, 340, 341, 342, 343, 344, 345, 346, 347,
 348, 349, 350, 351, 327, 352, 353, 354, 355, 356, 357, 358, 342, 359, 360, 361, 362, 363, 364, 39,
 365, 366, 367, 368, 369, 370, 371, 372, 373, 374, 375, 376, 377, 378, 379, 380, 381, 382, 383, 384,
 385, 386, 387, 388, 389, 390, 391, 392, 393, 394, 395, 396, 397, 398, 399, 400, 401, 402, 403, 404,
 405, 406, 407, 408, 409, 410, 411, 412, 413, 414, 415, 416, 417, 418, 419, 420, 421, 422, 423, 424,
 425, 388, 405, 426, 427, 428, 429, 430, 431, 432, 433, 434, 435, 436, 437, 438, 439, 440, 441, 442,
 427, 443, 444, 445, 446, 447, 437, 448, 449, 450, 451, 452, 453, 454, 455, 456, 457, 458, 459, 460,
 461, 462, 463, 464, 465, 466, 467, 468, 469, 470, 471, 472, 473, 474, 475, 476, 477, 478, 479, 480,
 481, 482, 483, 484, 485, 486, 487, 488, 489, 490, 491, 492, 493, 494, 495, 496, 497, 498, 499, 500,
 501, 502, 503, 504, 505, 506, 507, 508, 509, 510, 511, 512, 477, 492, 513, 514, 515, 516, 517, 518,
 519, 520, 521, 522, 523, 524, 525, 526, 527, 528, 529, 530, 515, 531, 532, 533, 534, 535, 525, 536,
 537, 538, 539, 540, 541, 542, 543, 544, 545, 546, 547, 548, 549, 550, 551, 552, 553, 554, 555, 556,
 557, 558, 559, 560, 561, 562, 563, 564, 565, 566, 567, 568, 569, 570, 571, 572, 177, 573, 574, 575,
 576, 577, 578, 171, 579, 580, 581, 582, 314, 213, 583, 584, 585, 586, 587, 588, 245, 589, 590, 591,
 592, 593, 594, 595, 596, 597, 598, 599, 600, 601, 602, 603, 604, 360, 361, 605, 606, 607, 608, 609,
 610, 611, 363, 612, 613, 614, 615, 616, 617, 618, 619, 620, 621, 622, 623, 448, 449, 624, 625, 626,
 451, 627, 628, 629, 630, 631, 632, 633, 634, 635, 636, 637, 536, 537, 638, 639, 640, 539, 641, 642,
 643, 644, 237, 645, 646, 647, 648, 649, 205, 650, 651, 652, 653, 654, 655, 656, 657, 658, 417, 659,
 660, 661, 662, 663, 664, 665, 666, 667, 668, 669, 670, 671, 672, 673, 674, 675, 676, 677, 678, 679,
 680, 681, 682, 683, 684, 685, 686, 239, 687, 504, 688, 689, 690, 691, 692, 693, 694, 695, 696, 697,
 698, 699, 237, 700, 701, 702, 703, 704, 705, 706, 707, 708, 709, 710, 711, 712, 713, 714, 715, 716,
 717, 718, 719, 720, 721, 722, 723, 724, 725, 726, 727, 728, 729, 730, 731, 732, 733, 734, 735, 736,
 43, 38, 737, 738, 739, 41, 740, 741, 742, 743, 744, 745, 746, 747, 748, 749, 750, 751, 752, 753,
 754, 755, 756, 757, 758, 759, 760, 761, 762, 763, 764, 765, 766, 767, 768, 769, 770, 771, 772, 773,
 774, 775, 776, 777, 778, 779, 780, 781, 782, 783, 784, 785, 786, 787, 788, 789, 790, 791, 792, 793,
 794, 795, 796, 797, 798, 799, 800, 801, 802, 803, 804, 805, 806, 807, 808, 809, 810, 811, 812, 813,
 814, 815, 816, 817, 818, 819, 820, 821, 822, 823, 824, 825, 826, 827, 828, 829, 830, 831, 832, 833,
 834, 835, 836, 837, 838, 839, 840, 841, 842, 843, 844, 845, 846, 847, 848, 849, 850, 851, 852, 853,
 854, 855, 856, 857, 858, 859, 860, 861, 862, 863, 864, 865, 866, 867, 868, 869, 870, 871, 872, 873,
 874, 875, 876, 877, 878, 879, 880, 881, 882, 883, 884, 885, 886, 887, 888, 889, 890, 891, 892, 893,
 894, 895, 896, 897, 898, 899, 900, 901, 902, 903, 904, 905, 906, 907, 908, 909, 910, 911, 912, 913,
 914, 915, 916, 917, 918, 919, 920, 921, 922, 923, 924, 925, 926, 927, 928, 929, 930, 931, 932, 933,
 934, 935, 936, 937, 938, 939, 940, 941, 942, 943, 944, 945, 946, 947, 948, 949, 950, 951, 952, 953,
 954, 955, 956, 957, 958, 959, 960, 961, 962, 963, 964, 965, 966, 967, 968, 969, 970, 971, 972, 973,
 974, 975, 976, 977, 978, 979, 980, 981,);

		static $yy_nxt = array(
array(
 1, 2, 3, 80, 105, 114, 119, 123, 127, 114, 131, 135, 139, 143, 147, 641, 151, 114, 4, 155,
 158, 161, 164, 166, 114, 114, 168, 5, 170, 5, 172, 114, 5, 114, 2, 114, 114, 114, 114,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 2, 78, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 2, -1, -1, -1, -1,
),
array(
 -1, 79, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 79, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 5, -1, 5, -1, -1, 5, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 243, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 260, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 283, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 284, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 804, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 26, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 298, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 82, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 83, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 84, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 85, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 86, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 87, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 88, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 89, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, 41, -1, -1, 41, -1, -1, -1, -1, 41, 41, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 90, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 91, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 92, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 93, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 94, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 95, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 96, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 97, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 53, 439, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 53, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, 54, -1, -1, 54, -1, -1, -1, -1, 54, 54, -1, -1, -1, -1, -1,
),
array(
 -1, 58, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 58, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, 59, -1, -1, 59, -1, -1, -1, -1, 59, 59, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 99, -1, -1, -1, 594, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, 68, -1, -1, 68, -1, -1, -1, -1, 68, 68, -1, -1, -1, -1, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, 74, -1, -1, 74, -1, -1, -1, -1, 74, 74, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 104, -1, 113, -1, -1, -1, 118, -1, 122, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 126, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 286, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 98, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 98, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 69,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 966, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 77, 73, 73, 73, 73, 73, 73, 73, 73, 1016, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 965, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 130, -1, 134, -1, -1, -1, -1, -1, 138, -1, -1, -1,
 -1, -1, -1, -1, -1, 142, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 70, 67, 67, 67, 67, 67, 67, 67, 67, 1015, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 1087, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, 1039, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, 196, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 197, -1, 744, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 218, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 1086, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, 624, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 133, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 103, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 198, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 146, 150, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 71, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 77, 73, 73, 73, 73, 73, 77, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 645, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 199, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 154, -1, -1, -1, 157, -1, -1, -1, -1, -1, -1, 160, -1, -1, 163, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 72, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 77, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, 200, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 647, -1, -1, -1, -1, -1, -1, -1, -1, 165, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 144, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 101, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 77, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 742, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 648, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 70, 67, 67, 67, 67, 67, 70, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 77, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 201, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 640, -1, -1, -1, -1, -1, -1, -1, 167, 169, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 70, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 77, 807, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 8, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 171, -1, 173, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 174, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 70, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 77, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, 104, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 181, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 175, -1, -1, -1, -1, 651, -1, -1, 176, 177, 743, -1, -1, -1,
 -1, 178, -1, 179, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 70, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, 631, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 202, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 104, -1, 180, -1, 783, -1, -1, -1, -1, -1, 142, 181, -1, 182, -1, -1, 652, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 70, 821, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 77, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 203, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 642, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 70, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 77, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, 204, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 638, -1, -1, -1, 798, -1, -1, -1, -1, -1, 184, 185, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, 625, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, 9, 658, -1, -1, -1, -1, -1, -1, -1, 653, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 186, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 70, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, -1, -1, 663, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 745, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 187, -1, -1, -1, -1, -1, -1, -1, 650, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 70, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 662, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 188, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 189, -1, -1, 190, -1,
 -1, -1, -1, 142, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 199, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 104, -1, -1, -1, 191, -1, -1, -1, -1, -1, 192, 193, -1, -1, -1, -1, 649, -1,
 194, 195, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 104, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 207, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 639, -1, -1, -1, -1, -1, -1, -1, -1, -1, 654, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 746, -1, 660, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 808, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 142, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 784, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 7, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 657, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 199, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 661, -1, -1, -1, -1, -1, -1, -1, -1, 753, -1, -1,
 -1, -1, 208, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 209, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 748,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 10, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 187, -1, 788, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 664, -1, -1, -1, -1, -1, -1, -1, -1, 787, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 210, -1,
 -1, -1, -1, -1, -1, -1, 199, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 104, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 656, -1, -1, -1,
 -1, -1, -1, 802, -1, -1, 752, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 212, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 213, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 217, -1, -1, -1, -1, -1, -1, -1, 665, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 218, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 809, -1, 219, 220, -1, 785,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 817, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 200, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 823, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 800, -1, 667, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 201, -1, -1, -1, -1, -1, -1, -1, -1, -1, 655, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 747, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 810, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 11, -1, 223, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 104, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 193, 644, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 104, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 181, -1, -1, -1,
 -1, -1, 224, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 12, -1, 225, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 812, -1, -1, -1, -1, -1, -1, 226, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, 663, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 754, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 230, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 104, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 659, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 233, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 819, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 234, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 235, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 831, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 670, -1, -1, 838, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 104, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 671, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 672, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 760, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 199,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 247, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 248, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 249, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 13, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 803, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 14, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 245, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 251, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 841, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 15, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 820, -1, 16,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 254, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 749, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 104, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 181, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 673, -1, 262, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 264, -1, -1, -1, -1, 265, -1, -1, -1, -1, -1, -1, -1, 81, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 266, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 267, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 104, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 181, 268, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 675, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 269, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 9, -1, -1, -1, -1, -1, 106, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 199, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 17, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 18, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 9, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 271, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 847, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 236, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 275, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 19, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 104, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 279, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 20, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, 280, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, 199, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 841, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 104, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 761, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 885, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 115, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 134, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, 142, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 763, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 21, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 106, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 884,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 268, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 199, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 288, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 236, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 289, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, 104, -1, -1, -1, -1, -1, 290, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 22, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 886, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 292, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 23, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, 9, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 24, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 791, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 199, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 236, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 293, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 9, 239, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 25, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 104, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 296, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 239, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 104, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 9, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 297, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 9, -1, -1, -1, -1, -1, 104, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 239, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 299, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, 300, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 239, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 9, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 27, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 303, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 28, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 199, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, 9, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 16, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 233, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 271, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 29, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, 30, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 199, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 306, -1, -1, -1, -1, -1, -1, 104, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 309, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 9, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 199, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 765, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 31, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 32, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 311, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 312, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 33, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 314, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 34, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 107, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 232, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 35, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 245, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 307, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 318, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 319, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 9, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 36, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 305, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 37, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 38, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, 320, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 313, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 9, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 1, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39,
 39, 39, 39, 39, 39, 39, 39, 39, 39, 40, 39, 39, 39, 39, 39, 39, 39, 39, 39,
),
array(
 1, -1, -1, 323, 324, -1, 325, 326, 682, -1, -1, 327, 328, 329, 330, -1, 766, -1, 331, 332,
 333, 334, 335, 336, 41, -1, 337, 41, 338, -1, -1, -1, 41, 41, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, 683, -1, -1, -1, -1, -1, 340, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 341, -1, 767, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, 342, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 343, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 344, -1, -1, -1, -1, -1, -1, -1, -1, -1, 345, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 685, -1, -1, -1, -1, -1, -1, -1, 347, 852, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 348, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 349, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 350, -1, -1, -1, -1, 888, -1, -1, 351, 352, -1, -1, -1, -1,
 -1, -1, -1, 353, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, 354, -1, -1, -1, -1, -1, -1, -1, 342, 355, -1, 356, -1, -1, 688, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 357, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 687, -1, -1, -1, 684, -1, -1, -1, -1, -1, 358, 359, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 360, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 361, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 362, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 363, -1, -1, 364, -1,
 -1, -1, -1, 342, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, -1, -1, 365, -1, -1, -1, -1, -1, 366, 367, -1, -1, -1, -1, 368, -1,
 -1, 689, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 854, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 369, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 342, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 371, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 372, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 693, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 355, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 374, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 375, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 695, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 372, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 377, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 855, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 372, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 378, -1, -1, -1, -1, -1, -1, -1, -1, 769, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 373, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 692, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 691, -1, -1, -1, -1, -1, -1, -1, -1, 694, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 379, -1,
 -1, -1, -1, -1, -1, -1, 372, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 380, -1, -1, -1,
 -1, -1, -1, 693, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 43, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 384, -1, -1, -1, -1, -1, -1, -1, 385, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 386, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 857, -1, -1, -1, -1, 768,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 858, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 387, -1, 388, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 793, -1, 389, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 373, -1, -1, -1, -1, -1, -1, -1, -1, -1, 690, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 390, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 805, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 814, -1, 904, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 367, 686, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 355, -1, -1, -1,
 -1, -1, 391, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 973, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 891, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 394, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 372, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 339, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 396, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 397, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 398, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 400, -1, -1, 897, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 696, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 372,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, 372, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 402, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 770, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 380, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 386, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 403, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 404, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 700, -1, 44,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 968, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 408, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, 698, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 355, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 412, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 413, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 355, 414, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 701, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 415, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 416, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 417, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 418, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 45, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 339, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 668, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 767, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, 342, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 422, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 46, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 414, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 372, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 424, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, 339, -1, -1, -1, -1, -1, 426, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 47, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 48, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 372, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 427, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 49, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 429, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 339, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 339, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 430, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 50, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 51, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 372, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 44, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 396, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 417, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 372, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 433, -1, -1, -1, -1, -1, -1, 339, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 435, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 372, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 52, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 108, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 395, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 380, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 434, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 432, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 1, 53, 439, 440, 441, -1, -1, 442, 443, -1, -1, 444, 445, 446, 447, -1, -1, -1, 448, 449,
 450, 451, 452, 453, 54, -1, 906, 54, 454, -1, 55, -1, 54, 54, 53, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, 706, -1, -1, -1, -1, -1, 456, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 457, -1, 772, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, 458, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 459, -1, -1, -1, -1, -1, -1, -1, -1, -1, 460, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 461, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 708, -1, -1, -1, -1, -1, -1, -1, 462, 974, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 889, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 463, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 710, -1, -1, -1, -1, 917, -1, -1, 464, -1, -1, -1, -1, -1,
 -1, -1, -1, 465, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, 466, -1, -1, -1, -1, -1, -1, -1, 458, 467, -1, 468, -1, -1, 773, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 469, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 707, -1, -1, -1, -1, -1, 470, 862, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 890, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 471, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 472, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 473, -1, -1, 474, -1,
 -1, -1, -1, 458, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, -1, -1, 475, -1, -1, -1, -1, -1, 476, 477, -1, -1, -1, -1, 1037, -1,
 -1, 711, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 478, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 458, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 480, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 481, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 715, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 467, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 483, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 484, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 481, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 486, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 481, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 482, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 713, -1, -1, -1, -1, -1, -1, -1, -1, 716, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 488, -1,
 -1, -1, -1, -1, -1, -1, 481, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 489, -1, -1, -1,
 -1, -1, -1, 715, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 57, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 492, -1, -1, -1, -1, -1, -1, -1, 493, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 494, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1038, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 714, -1, 495, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 482, -1, -1, -1, -1, -1, -1, -1, -1, -1, 712, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 496, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 774, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 922, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 477, 709, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 467, -1, -1, -1,
 -1, -1, 497, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 499, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 500, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 481, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 455, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 502, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 503, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 504, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 505, -1, -1, 867, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 506, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 481,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, 481, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 507, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 489, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 494, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 892, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 508, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 510, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, 718, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 467, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 467, 514, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 515, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 893, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 516, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 517, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 518, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 519, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 455, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 772, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, 458, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 515, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 481, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 520, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, 455, -1, -1, -1, -1, -1, 522, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 481, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 523, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 481, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 524, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 455, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 455, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 525, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 502, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 517, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 481, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 528, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 481, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 501, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 489, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 527, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 526, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 58, -1, -1, -1, -1,
),
array(
 1, -1, -1, 533, 534, -1, -1, 535, 536, -1, -1, 537, 538, 539, 540, -1, -1, -1, 541, 542,
 970, 543, 544, 545, 59, -1, 923, 59, 546, -1, -1, -1, 59, 59, -1, 60, 61, -1, -1,
),
array(
 -1, -1, 547, -1, 723, -1, -1, -1, -1, -1, 548, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 549, -1, 776, -1, -1, -1, -1, -1, -1, -1, -1, 63,
 -1, -1, -1, -1, -1, 550, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 551, -1, -1, -1, 552, -1, -1, -1, -1, -1, -1, -1, -1, -1, 553, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 554, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 724, -1, -1, -1, -1, -1, -1, -1, 555, 983, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 907, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 556, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 727, -1, -1, -1, -1, 927, -1, -1, 557, -1, -1, -1, -1, -1,
 -1, -1, -1, 558, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 547, -1, 559, -1, -1, -1, -1, -1, -1, -1, 550, 560, -1, 561, -1, -1, 777, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 562, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 563, -1, -1, -1, -1, -1, 564, 871, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1075, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 565, -1, -1, -1, -1, -1, -1, -1, -1, -1, 726, 566, -1, -1, 567, -1,
 -1, -1, -1, 550, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 547, -1, -1, -1, 971, -1, -1, -1, -1, -1, 568, 569, -1, -1, -1, -1, 1044, -1,
 -1, 728, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 729, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 550, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 571, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 572, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 732, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 547, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 560, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, 64, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 574, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 575, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 572, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 547, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 577, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 572, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 573, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 778, -1, -1, -1, -1, -1, -1, -1, -1, 733, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 579, -1,
 -1, -1, -1, -1, -1, -1, 572, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 547, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 580, -1, -1, -1,
 -1, -1, -1, 732, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 65, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 582, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 583, -1, -1, -1, -1, -1, -1, -1, 972, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 584, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 731, -1, 585, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 573, -1, -1, -1, -1, -1, -1, -1, -1, -1, 730, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 587, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 779, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 547, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 569, 725, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 547, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 560, -1, -1, -1,
 -1, -1, 588, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 591, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 572, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 547, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 593, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 595, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 596, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 597, -1, -1, 876, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 547, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 598, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 572,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, 572, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 599, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 580, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 584, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 600, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 602, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 66, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, 735, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 547, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 560, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 547, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 560, 606, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 607, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 894, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 99, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 608, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 609, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 610, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 611, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 547, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 776, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, 550, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 607, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 572, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 612, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, 547, -1, -1, -1, -1, -1, 614, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 572, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 615, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 572, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 616, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 547, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 547, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 617, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 593, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 609, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 572, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 620, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 572, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 592, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 580, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 619, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 618, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 1, 67, -1, 963, 100, 67, 67, 636, 1073, 67, 1082, 1035, 1042, 1046, 1048, 740, 67, 67, 781, 977,
 984, 1050, 882, 900, 68, 67, 1052, 68, 67, -1, -1, 67, 68, 68, 67, -1, -1, 67, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 967, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 626, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 628, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 110, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, 629, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 110, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 1, 73, -1, 964, 73, 73, 73, 637, 1074, 73, 1083, 1036, 1043, 1047, 1049, 741, 73, 73, 73, 978,
 985, 1051, 1053, 883, 74, 73, 1055, 74, 73, 75, -1, 73, 74, 74, 73, -1, 76, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 632, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 634, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 112, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, 635, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 112, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 109, 67, 67, 67, 67, 67, 67, 919, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 102, 73, 73, 73, 73, 73, 73, 912, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 215, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 227, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 206, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 183, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 214, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 77, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, 104, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 193, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 6, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 231, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 70, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 205, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 895, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 827, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 221, -1, 222, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 799, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 211, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 757, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 228, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 257, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 199, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 240, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 756, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 239, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 239, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 755, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 237, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 245, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 250, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 219, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 256, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 274, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 677, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 277, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 291, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 678, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 294, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 273, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 307, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 302, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 305, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 316, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 346, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 370, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 383, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 376, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 339, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 367, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 42, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 382, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 381, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 392, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 409, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 372, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 380, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 401, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 399, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 419, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 703, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 425, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 420, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 423, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 704, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 431, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 434, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 432, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 479, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 491, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 485, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 455, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 477, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 56, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 487, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 717, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 511, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 481, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 489, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 719, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 513, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 521, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 514, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 527, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 526, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 570, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 576, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, 547, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 569, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 586, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 578, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 734, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 590, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 603, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 572, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 736, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, 605, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 613, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 606, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 619, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 618, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 116, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 111, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 750, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 666, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 669, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 238, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, 258, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 676, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, 244, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 790, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 246, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 241, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 674, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 276, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 762, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 239, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 281, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 278, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 301, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 295, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 304, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 310, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 317, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 792, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 373, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 406, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 697, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 421, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 436, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 482, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 490, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 512, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 529, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 573, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 581, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 580, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 604, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 621, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 120, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 117, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 751, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 199, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 252, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 315, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 759, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 282, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 681, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 794, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 407, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 699, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 428, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 124, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 121, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 216, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 242, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 255, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 702, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 679, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 308, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 410, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 128, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 125, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 229, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 813, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 259, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 437, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 263, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 285, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, 411, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 132, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 125, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 253, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 720, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 270, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 287, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 136, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 129, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 239, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 530, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 136, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 137, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 261, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 737, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 140, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 141, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 272, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, 622, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 148, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 145, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 273, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 152, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 643, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 844, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 156, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 646, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 125, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 680, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 149, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 764, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 136, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 153, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 313, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 159, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 896, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 162, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 393, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 372, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 859, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 405, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 402, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 339, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 705, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 771, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 865, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 498, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 481, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 509, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 507, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 869, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 455, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 722, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 775, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 874, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 589, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 572, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 601, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 599, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 878, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 547, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 739, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 780, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 627, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 633, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 796, 67, 67, 67, 1009, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 782, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 784, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 850, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 786, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 861, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 856, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 864, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 866, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, 795, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 758, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 721, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 738, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 835, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 887, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 860, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 868, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 877, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 806, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 797, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 855, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 880, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 801, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 870, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 863, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 873, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, 875, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 789, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 905, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 815, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 807, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1018, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 864, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 881, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 811, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 879, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 898, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 916, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 821, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1017, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 816, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 873, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 818, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 872, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 825, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 822, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1014, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 824, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 899, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 829, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1013, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 807, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 828, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 821, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 826, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 832, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 833, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 830, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 836, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 807, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 821, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 834, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 839, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 837, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 842, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 840, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 845, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 807, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 821, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 843, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 848, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 807, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 821, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 807, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 821, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 807, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 821, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 846, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 851, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 840, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 845, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 807, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 821, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 849, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 853, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 67, -1, 67, 989, 67, 67, 67, 991, 67, 911, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 1054, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 990, 73, 73, 73, 992, 73, 901, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 1057, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 77, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 70, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 903, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 902,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 915, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 908, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 930, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 909, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 969, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 910, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 73, -1, 807, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 821, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 924, 1005, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 920, 1006, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, 914, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 913,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 926, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 981, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 918, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 928, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 925, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 921,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, 933, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 987, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 931, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1062, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 929, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1065, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 934, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 932, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 976, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 975, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 936, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 935, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1041, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1040, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 938,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 937,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 940, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 939, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 942, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 941, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 944, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 943, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 946, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 945, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 931, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 929, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 948, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 947, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 950, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 949, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 952, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 951, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 954, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 953, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 956, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 955, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 958, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 957, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 944, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 943, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 938, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 937, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 960, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 959, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 954, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 953, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 938, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 937, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 962, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 961, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 993, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 994, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 982, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 980, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 979, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 73, -1, 807, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1028, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 821, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1027, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 995, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 996, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 988, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, 986, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 1084, 67, 67, 67, 67, 67, 67, 67, 997, 999, 1001, 67, 67, 67,
 67, 1058, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 1085, 73, 73, 73, 73, 73, 73, 73, 998, 1000, 1002, 73, 73, 73,
 73, 1061, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 1003, 67, 67, 67, 67, 67, 67, 67, 67, 1060, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 1004, 73, 73, 73, 73, 73, 73, 73, 73, 1063, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 1007, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 1008, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 1011, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1010, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 1013, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 1012, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 1019, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 1014, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 1007, 67, 1066, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 1020, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 1021, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 1008, 73, 1069, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 1023, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 1022, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1025, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 1024, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 1029, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1026, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 1031, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 1030, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1033, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 1032, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1034, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 1056, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 1059, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1045, -1, -1, -1,
 -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1064, 67, 67, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1067, 73, 73, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1068, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1071, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1070, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1072, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1076, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1077, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67,
 67, 67, 1078, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73,
 73, 73, 1079, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
array(
 -1, 67, -1, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 67, 1080, 67, 67, 67, 67,
 67, 67, 67, 67, -1, 67, 67, -1, 67, -1, -1, 67, -1, -1, 67, -1, -1, 67, -1,
),
array(
 -1, 73, -1, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 1081, 73, 73, 73, 73,
 73, 73, 73, 73, -1, 73, 73, -1, 73, -1, -1, 73, -1, -1, 73, -1, -1, 73, -1,
),
);

	public function /*Yytoken*/ nextToken ()
 {
		$yy_anchor = self::YY_NO_ANCHOR;
		$yy_state = self::$yy_state_dtrans[$this->yy_lexical_state];
		$yy_next_state = self::YY_NO_STATE;
		$yy_last_accept_state = self::YY_NO_STATE;
		$yy_initial = true;

		$this->yy_mark_start();
		$yy_this_accept = self::$yy_acpt[$yy_state];
		if (self::YY_NOT_ACCEPT != $yy_this_accept) {
			$yy_last_accept_state = $yy_state;
			$this->yy_mark_end();
		}
		while (true) {
			if ($yy_initial && $this->yy_at_bol) $yy_lookahead = self::YY_BOL;
			else $yy_lookahead = $this->yy_advance();
			$yy_next_state = self::$yy_nxt[self::$yy_rmap[$yy_state]][self::$yy_cmap[$yy_lookahead]];
			if ($this->YY_EOF == $yy_lookahead && true == $yy_initial) {
				return null;
			}
			if (self::YY_F != $yy_next_state) {
				$yy_state = $yy_next_state;
				$yy_initial = false;
				$yy_this_accept = self::$yy_acpt[$yy_state];
				if (self::YY_NOT_ACCEPT != $yy_this_accept) {
					$yy_last_accept_state = $yy_state;
					$this->yy_mark_end();
				}
			}
			else {
				if (self::YY_NO_STATE == $yy_last_accept_state) {
					throw new Exception("Lexical Error: Unmatched Input.");
				}
				else {
					$yy_anchor = self::$yy_acpt[$yy_last_accept_state];
					if (0 != (self::YY_END & $yy_anchor)) {
						$this->yy_move_end();
					}
					$this->yy_to_mark();
					switch ($yy_last_accept_state) {
						case 1:
							
						case -2:
							break;
						case 2:
							{ $this->yybegin( self::NUMERATOR ); return $this->createToken(); }
						case -3:
							break;
						case 3:
							{
	  throw new Exception("bah!");
}
						case -4:
							break;
						case 4:
							{ $this->yybegin( self::A ); return $this->createToken(1); }
						case -5:
							break;
						case 5:
							{ }
						case -6:
							break;
						case 6:
							{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Unit'); }
						case -7:
							break;
						case 7:
							{ $this->yybegin( self::COMMENTS ); return $this->createToken('Comment'); }
						case -8:
							break;
						case 8:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(1); }
						case -9:
							break;
						case 9:
							{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Descriptor'); }
						case -10:
							break;
						case 10:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(6); }
						case -11:
							break;
						case 11:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(10); }
						case -12:
							break;
						case 12:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(2); }
						case -13:
							break;
						case 13:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(9); }
						case -14:
							break;
						case 14:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(4); }
						case -15:
							break;
						case 15:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(5); }
						case -16:
							break;
						case 16:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.5); }
						case -17:
							break;
						case 17:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(8); }
						case -18:
							break;
						case 18:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(12); }
						case -19:
							break;
						case 19:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(7); }
						case -20:
							break;
						case 20:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.166); }
						case -21:
							break;
						case 21:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.2); }
						case -22:
							break;
						case 22:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1); }
						case -23:
							break;
						case 23:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(3); }
						case -24:
							break;
						case 24:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.33); }
						case -25:
							break;
						case 25:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(11); }
						case -26:
							break;
						case 26:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.125); }
						case -27:
							break;
						case 27:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.11); }
						case -28:
							break;
						case 28:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.25); }
						case -29:
							break;
						case 29:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(12); }
						case -30:
							break;
						case 30:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(20); }
						case -31:
							break;
						case 31:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1429); }
						case -32:
							break;
						case 32:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(16); }
						case -33:
							break;
						case 33:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(19); }
						case -34:
							break;
						case 34:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(15); }
						case -35:
							break;
						case 35:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(18); }
						case -36:
							break;
						case 36:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(14); }
						case -37:
							break;
						case 37:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(13); }
						case -38:
							break;
						case 38:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(17); }
						case -39:
							break;
						case 39:
							{
}
						case -40:
							break;
						case 40:
							{
	$this->yybegin(self::YYINITIAL);
	return $this->createToken('Done');
}
						case -41:
							break;
						case 41:
							{ }
						case -42:
							break;
						case 42:
							{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Unit'); }
						case -43:
							break;
						case 43:
							{ }
						case -44:
							break;
						case 44:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.5); }
						case -45:
							break;
						case 45:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.166); }
						case -46:
							break;
						case 46:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.2); }
						case -47:
							break;
						case 47:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1); }
						case -48:
							break;
						case 48:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.33); }
						case -49:
							break;
						case 49:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.125); }
						case -50:
							break;
						case 50:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.11); }
						case -51:
							break;
						case 51:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.25); }
						case -52:
							break;
						case 52:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1429); }
						case -53:
							break;
						case 53:
							{ $this->yybegin( self::NUMERATOR ); return $this->createToken(); }
						case -54:
							break;
						case 54:
							{ }
						case -55:
							break;
						case 55:
							{ $this->yybegin( self::DENOMINATOR ); return $this->createToken('Fraction'); }
						case -56:
							break;
						case 56:
							{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Unit'); }
						case -57:
							break;
						case 57:
							{ $this->yybegin( self::YYINITIAL ); return $this->createToken('Add'); }
						case -58:
							break;
						case 58:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(); }
						case -59:
							break;
						case 59:
							{ }
						case -60:
							break;
						case 60:
							{ }
						case -61:
							break;
						case 61:
							{ }
						case -62:
							break;
						case 62:
							{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Unit'); }
						case -63:
							break;
						case 63:
							{ $this->yybegin( self::HAVE_UNIT ); }
						case -64:
							break;
						case 64:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(12); }
						case -65:
							break;
						case 65:
							{ }
						case -66:
							break;
						case 66:
							{ }
						case -67:
							break;
						case 67:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -68:
							break;
						case 68:
							{ }
						case -69:
							break;
						case 69:
							{ return $this->createToken(); }
						case -70:
							break;
						case 70:
							{ return $this->createToken('Descriptor'); }
						case -71:
							break;
						case 71:
							{ $this->yybegin( self::YYINITIAL ); return $this->createToken('Add'); }
						case -72:
							break;
						case 72:
							{ $this->yybegin( self::YYINITIAL ); return $this->createToken('Add'); }
						case -73:
							break;
						case 73:
							{ return $this->createToken('Ingredient'); }
						case -74:
							break;
						case 74:
							{ }
						case -75:
							break;
						case 75:
							{ $this->yybegin( self::YYINITIAL ); return $this->createToken('Done'); }
						case -76:
							break;
						case 76:
							{ }
						case -77:
							break;
						case 77:
							{ return $this->createToken('Descriptor'); }
						case -78:
							break;
						case 79:
							{ $this->yybegin( self::NUMERATOR ); return $this->createToken(); }
						case -79:
							break;
						case 80:
							{
	  throw new Exception("bah!");
}
						case -80:
							break;
						case 81:
							{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Descriptor'); }
						case -81:
							break;
						case 82:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.166); }
						case -82:
							break;
						case 83:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.2); }
						case -83:
							break;
						case 84:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1); }
						case -84:
							break;
						case 85:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.33); }
						case -85:
							break;
						case 86:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.125); }
						case -86:
							break;
						case 87:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.11); }
						case -87:
							break;
						case 88:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.25); }
						case -88:
							break;
						case 89:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1429); }
						case -89:
							break;
						case 90:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.166); }
						case -90:
							break;
						case 91:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.2); }
						case -91:
							break;
						case 92:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1); }
						case -92:
							break;
						case 93:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.33); }
						case -93:
							break;
						case 94:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.125); }
						case -94:
							break;
						case 95:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.11); }
						case -95:
							break;
						case 96:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.25); }
						case -96:
							break;
						case 97:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.1429); }
						case -97:
							break;
						case 98:
							{ $this->yybegin( self::NUMERATOR ); return $this->createToken(); }
						case -98:
							break;
						case 99:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(12); }
						case -99:
							break;
						case 100:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -100:
							break;
						case 101:
							{ return $this->createToken('Descriptor'); }
						case -101:
							break;
						case 102:
							{ return $this->createToken('Ingredient'); }
						case -102:
							break;
						case 103:
							{ return $this->createToken('Descriptor'); }
						case -103:
							break;
						case 105:
							{
	  throw new Exception("bah!");
}
						case -104:
							break;
						case 106:
							{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Descriptor'); }
						case -105:
							break;
						case 107:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.25); }
						case -106:
							break;
						case 108:
							{ $this->yybegin( self::HAVE_AMOUNT ); return $this->createToken(0.25); }
						case -107:
							break;
						case 109:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -108:
							break;
						case 110:
							{ return $this->createToken('Descriptor'); }
						case -109:
							break;
						case 111:
							{ return $this->createToken('Ingredient'); }
						case -110:
							break;
						case 112:
							{ return $this->createToken('Descriptor'); }
						case -111:
							break;
						case 114:
							{
	  throw new Exception("bah!");
}
						case -112:
							break;
						case 115:
							{ $this->yybegin( self::HAVE_UNIT ); return $this->createToken('Descriptor'); }
						case -113:
							break;
						case 116:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -114:
							break;
						case 117:
							{ return $this->createToken('Ingredient'); }
						case -115:
							break;
						case 119:
							{
	  throw new Exception("bah!");
}
						case -116:
							break;
						case 120:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -117:
							break;
						case 121:
							{ return $this->createToken('Ingredient'); }
						case -118:
							break;
						case 123:
							{
	  throw new Exception("bah!");
}
						case -119:
							break;
						case 124:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -120:
							break;
						case 125:
							{ return $this->createToken('Ingredient'); }
						case -121:
							break;
						case 127:
							{
	  throw new Exception("bah!");
}
						case -122:
							break;
						case 128:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -123:
							break;
						case 129:
							{ return $this->createToken('Ingredient'); }
						case -124:
							break;
						case 131:
							{
	  throw new Exception("bah!");
}
						case -125:
							break;
						case 132:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -126:
							break;
						case 133:
							{ return $this->createToken('Ingredient'); }
						case -127:
							break;
						case 135:
							{
	  throw new Exception("bah!");
}
						case -128:
							break;
						case 136:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -129:
							break;
						case 137:
							{ return $this->createToken('Ingredient'); }
						case -130:
							break;
						case 139:
							{
	  throw new Exception("bah!");
}
						case -131:
							break;
						case 140:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -132:
							break;
						case 141:
							{ return $this->createToken('Ingredient'); }
						case -133:
							break;
						case 143:
							{
	  throw new Exception("bah!");
}
						case -134:
							break;
						case 144:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -135:
							break;
						case 145:
							{ return $this->createToken('Ingredient'); }
						case -136:
							break;
						case 147:
							{
	  throw new Exception("bah!");
}
						case -137:
							break;
						case 148:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -138:
							break;
						case 149:
							{ return $this->createToken('Ingredient'); }
						case -139:
							break;
						case 151:
							{
	  throw new Exception("bah!");
}
						case -140:
							break;
						case 152:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -141:
							break;
						case 153:
							{ return $this->createToken('Ingredient'); }
						case -142:
							break;
						case 155:
							{
	  throw new Exception("bah!");
}
						case -143:
							break;
						case 156:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -144:
							break;
						case 158:
							{
	  throw new Exception("bah!");
}
						case -145:
							break;
						case 159:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -146:
							break;
						case 161:
							{
	  throw new Exception("bah!");
}
						case -147:
							break;
						case 162:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -148:
							break;
						case 164:
							{
	  throw new Exception("bah!");
}
						case -149:
							break;
						case 166:
							{
	  throw new Exception("bah!");
}
						case -150:
							break;
						case 168:
							{
	  throw new Exception("bah!");
}
						case -151:
							break;
						case 170:
							{
	  throw new Exception("bah!");
}
						case -152:
							break;
						case 172:
							{
	  throw new Exception("bah!");
}
						case -153:
							break;
						case 636:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -154:
							break;
						case 637:
							{ return $this->createToken('Ingredient'); }
						case -155:
							break;
						case 641:
							{
	  throw new Exception("bah!");
}
						case -156:
							break;
						case 643:
							{ return $this->createToken('Ingredient'); }
						case -157:
							break;
						case 646:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -158:
							break;
						case 740:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -159:
							break;
						case 741:
							{ return $this->createToken('Ingredient'); }
						case -160:
							break;
						case 781:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -161:
							break;
						case 782:
							{ return $this->createToken('Ingredient'); }
						case -162:
							break;
						case 796:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -163:
							break;
						case 797:
							{ return $this->createToken('Ingredient'); }
						case -164:
							break;
						case 806:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -165:
							break;
						case 807:
							{ return $this->createToken('Ingredient'); }
						case -166:
							break;
						case 815:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -167:
							break;
						case 816:
							{ return $this->createToken('Ingredient'); }
						case -168:
							break;
						case 821:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -169:
							break;
						case 822:
							{ return $this->createToken('Ingredient'); }
						case -170:
							break;
						case 825:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -171:
							break;
						case 826:
							{ return $this->createToken('Ingredient'); }
						case -172:
							break;
						case 829:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -173:
							break;
						case 830:
							{ return $this->createToken('Ingredient'); }
						case -174:
							break;
						case 833:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -175:
							break;
						case 834:
							{ return $this->createToken('Ingredient'); }
						case -176:
							break;
						case 836:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -177:
							break;
						case 837:
							{ return $this->createToken('Ingredient'); }
						case -178:
							break;
						case 839:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -179:
							break;
						case 840:
							{ return $this->createToken('Ingredient'); }
						case -180:
							break;
						case 842:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -181:
							break;
						case 843:
							{ return $this->createToken('Ingredient'); }
						case -182:
							break;
						case 845:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -183:
							break;
						case 846:
							{ return $this->createToken('Ingredient'); }
						case -184:
							break;
						case 848:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -185:
							break;
						case 849:
							{ return $this->createToken('Ingredient'); }
						case -186:
							break;
						case 851:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -187:
							break;
						case 853:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -188:
							break;
						case 882:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -189:
							break;
						case 883:
							{ return $this->createToken('Ingredient'); }
						case -190:
							break;
						case 900:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -191:
							break;
						case 901:
							{ return $this->createToken('Ingredient'); }
						case -192:
							break;
						case 911:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -193:
							break;
						case 912:
							{ return $this->createToken('Ingredient'); }
						case -194:
							break;
						case 919:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -195:
							break;
						case 920:
							{ return $this->createToken('Ingredient'); }
						case -196:
							break;
						case 924:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -197:
							break;
						case 925:
							{ return $this->createToken('Ingredient'); }
						case -198:
							break;
						case 928:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -199:
							break;
						case 929:
							{ return $this->createToken('Ingredient'); }
						case -200:
							break;
						case 931:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -201:
							break;
						case 932:
							{ return $this->createToken('Ingredient'); }
						case -202:
							break;
						case 934:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -203:
							break;
						case 935:
							{ return $this->createToken('Ingredient'); }
						case -204:
							break;
						case 936:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -205:
							break;
						case 937:
							{ return $this->createToken('Ingredient'); }
						case -206:
							break;
						case 938:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -207:
							break;
						case 939:
							{ return $this->createToken('Ingredient'); }
						case -208:
							break;
						case 940:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -209:
							break;
						case 941:
							{ return $this->createToken('Ingredient'); }
						case -210:
							break;
						case 942:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -211:
							break;
						case 943:
							{ return $this->createToken('Ingredient'); }
						case -212:
							break;
						case 944:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -213:
							break;
						case 945:
							{ return $this->createToken('Ingredient'); }
						case -214:
							break;
						case 946:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -215:
							break;
						case 947:
							{ return $this->createToken('Ingredient'); }
						case -216:
							break;
						case 948:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -217:
							break;
						case 949:
							{ return $this->createToken('Ingredient'); }
						case -218:
							break;
						case 950:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -219:
							break;
						case 951:
							{ return $this->createToken('Ingredient'); }
						case -220:
							break;
						case 952:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -221:
							break;
						case 953:
							{ return $this->createToken('Ingredient'); }
						case -222:
							break;
						case 954:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -223:
							break;
						case 955:
							{ return $this->createToken('Ingredient'); }
						case -224:
							break;
						case 956:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -225:
							break;
						case 957:
							{ return $this->createToken('Ingredient'); }
						case -226:
							break;
						case 958:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -227:
							break;
						case 959:
							{ return $this->createToken('Ingredient'); }
						case -228:
							break;
						case 960:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -229:
							break;
						case 961:
							{ return $this->createToken('Ingredient'); }
						case -230:
							break;
						case 962:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -231:
							break;
						case 963:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -232:
							break;
						case 964:
							{ return $this->createToken('Ingredient'); }
						case -233:
							break;
						case 965:
							{ return $this->createToken('Ingredient'); }
						case -234:
							break;
						case 966:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -235:
							break;
						case 975:
							{ return $this->createToken('Ingredient'); }
						case -236:
							break;
						case 976:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -237:
							break;
						case 977:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -238:
							break;
						case 978:
							{ return $this->createToken('Ingredient'); }
						case -239:
							break;
						case 984:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -240:
							break;
						case 985:
							{ return $this->createToken('Ingredient'); }
						case -241:
							break;
						case 989:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -242:
							break;
						case 990:
							{ return $this->createToken('Ingredient'); }
						case -243:
							break;
						case 991:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -244:
							break;
						case 992:
							{ return $this->createToken('Ingredient'); }
						case -245:
							break;
						case 993:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -246:
							break;
						case 994:
							{ return $this->createToken('Ingredient'); }
						case -247:
							break;
						case 995:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -248:
							break;
						case 996:
							{ return $this->createToken('Ingredient'); }
						case -249:
							break;
						case 997:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -250:
							break;
						case 998:
							{ return $this->createToken('Ingredient'); }
						case -251:
							break;
						case 999:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -252:
							break;
						case 1000:
							{ return $this->createToken('Ingredient'); }
						case -253:
							break;
						case 1001:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -254:
							break;
						case 1002:
							{ return $this->createToken('Ingredient'); }
						case -255:
							break;
						case 1003:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -256:
							break;
						case 1004:
							{ return $this->createToken('Ingredient'); }
						case -257:
							break;
						case 1005:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -258:
							break;
						case 1006:
							{ return $this->createToken('Ingredient'); }
						case -259:
							break;
						case 1007:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -260:
							break;
						case 1008:
							{ return $this->createToken('Ingredient'); }
						case -261:
							break;
						case 1009:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -262:
							break;
						case 1010:
							{ return $this->createToken('Ingredient'); }
						case -263:
							break;
						case 1011:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -264:
							break;
						case 1012:
							{ return $this->createToken('Ingredient'); }
						case -265:
							break;
						case 1013:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -266:
							break;
						case 1014:
							{ return $this->createToken('Ingredient'); }
						case -267:
							break;
						case 1015:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -268:
							break;
						case 1016:
							{ return $this->createToken('Ingredient'); }
						case -269:
							break;
						case 1017:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -270:
							break;
						case 1018:
							{ return $this->createToken('Ingredient'); }
						case -271:
							break;
						case 1019:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -272:
							break;
						case 1020:
							{ return $this->createToken('Ingredient'); }
						case -273:
							break;
						case 1021:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -274:
							break;
						case 1022:
							{ return $this->createToken('Ingredient'); }
						case -275:
							break;
						case 1023:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -276:
							break;
						case 1024:
							{ return $this->createToken('Ingredient'); }
						case -277:
							break;
						case 1025:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -278:
							break;
						case 1026:
							{ return $this->createToken('Ingredient'); }
						case -279:
							break;
						case 1027:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -280:
							break;
						case 1028:
							{ return $this->createToken('Ingredient'); }
						case -281:
							break;
						case 1029:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -282:
							break;
						case 1030:
							{ return $this->createToken('Ingredient'); }
						case -283:
							break;
						case 1031:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -284:
							break;
						case 1032:
							{ return $this->createToken('Ingredient'); }
						case -285:
							break;
						case 1033:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -286:
							break;
						case 1034:
							{ return $this->createToken('Ingredient'); }
						case -287:
							break;
						case 1035:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -288:
							break;
						case 1036:
							{ return $this->createToken('Ingredient'); }
						case -289:
							break;
						case 1040:
							{ return $this->createToken('Ingredient'); }
						case -290:
							break;
						case 1041:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -291:
							break;
						case 1042:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -292:
							break;
						case 1043:
							{ return $this->createToken('Ingredient'); }
						case -293:
							break;
						case 1046:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -294:
							break;
						case 1047:
							{ return $this->createToken('Ingredient'); }
						case -295:
							break;
						case 1048:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -296:
							break;
						case 1049:
							{ return $this->createToken('Ingredient'); }
						case -297:
							break;
						case 1050:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -298:
							break;
						case 1051:
							{ return $this->createToken('Ingredient'); }
						case -299:
							break;
						case 1052:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -300:
							break;
						case 1053:
							{ return $this->createToken('Ingredient'); }
						case -301:
							break;
						case 1054:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -302:
							break;
						case 1055:
							{ return $this->createToken('Ingredient'); }
						case -303:
							break;
						case 1056:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -304:
							break;
						case 1057:
							{ return $this->createToken('Ingredient'); }
						case -305:
							break;
						case 1058:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -306:
							break;
						case 1059:
							{ return $this->createToken('Ingredient'); }
						case -307:
							break;
						case 1060:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -308:
							break;
						case 1061:
							{ return $this->createToken('Ingredient'); }
						case -309:
							break;
						case 1062:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -310:
							break;
						case 1063:
							{ return $this->createToken('Ingredient'); }
						case -311:
							break;
						case 1064:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -312:
							break;
						case 1065:
							{ return $this->createToken('Ingredient'); }
						case -313:
							break;
						case 1066:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -314:
							break;
						case 1067:
							{ return $this->createToken('Ingredient'); }
						case -315:
							break;
						case 1068:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -316:
							break;
						case 1069:
							{ return $this->createToken('Ingredient'); }
						case -317:
							break;
						case 1070:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -318:
							break;
						case 1071:
							{ return $this->createToken('Ingredient'); }
						case -319:
							break;
						case 1072:
							{ return $this->createToken('Ingredient'); }
						case -320:
							break;
						case 1073:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -321:
							break;
						case 1074:
							{ return $this->createToken('Ingredient'); }
						case -322:
							break;
						case 1076:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -323:
							break;
						case 1077:
							{ return $this->createToken('Ingredient'); }
						case -324:
							break;
						case 1078:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -325:
							break;
						case 1079:
							{ return $this->createToken('Ingredient'); }
						case -326:
							break;
						case 1080:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -327:
							break;
						case 1081:
							{ return $this->createToken('Ingredient'); }
						case -328:
							break;
						case 1082:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -329:
							break;
						case 1083:
							{ return $this->createToken('Ingredient'); }
						case -330:
							break;
						case 1084:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -331:
							break;
						case 1085:
							{ return $this->createToken('Ingredient'); }
						case -332:
							break;
						case 1086:
							{ $this->yybegin( self::HAVE_INGREDIENT ); return $this->createToken('Ingredient'); }
						case -333:
							break;
						case 1087:
							{ return $this->createToken('Ingredient'); }
						case -334:
							break;
						default:
						$this->yy_error('INTERNAL',false);
					case -1:
					}
					$yy_initial = true;
					$yy_state = self::$yy_state_dtrans[$this->yy_lexical_state];
					$yy_next_state = self::YY_NO_STATE;
					$yy_last_accept_state = self::YY_NO_STATE;
					$this->yy_mark_start();
					$yy_this_accept = self::$yy_acpt[$yy_state];
					if (self::YY_NOT_ACCEPT != $yy_this_accept) {
						$yy_last_accept_state = $yy_state;
						$this->yy_mark_end();
					}
				}
			}
		}
	}
}
